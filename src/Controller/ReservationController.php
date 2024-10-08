<?php


namespace App\Controller;

use App\Entity\EntreeSortie;
use App\Entity\Paiement;
use App\Entity\Parking;
use App\Entity\Place;
use Geocoder\Model\Coordinates;
use Geocoder\Query\GeocodeQuery;
use App\Entity\Reservation;
use App\Form\PaiementType;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use App\Form\ReservationStep1Type;
use App\Form\ReservationStep2Type;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Service\PdfService;
use Doctrine\ORM\EntityManagerInterface;
use Geocoder\Provider\GoogleMaps\GoogleMaps;
use Geocoder\StatefulGeocoder;
use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class ReservationController extends AbstractController
{
    private function searchDistance(string $startAddress, EntityManagerInterface $em): array
    {
        $parkingRepo = $em->getRepository(Parking::class);
        $client = new GuzzleAdapter(new Client());
        $provider = new GoogleMaps($client, null, 'AIzaSyBn5ha5UvXZ3Fo5bb22RV59PuEE38TAt88');
        $geocoder = new StatefulGeocoder($provider);
        $startResult = $geocoder->geocodeQuery(GeocodeQuery::create($startAddress))->first();
        $distances = array();
        $parkings = $parkingRepo->findAll();
        $startCoordinates = $startResult->getCoordinates();
        foreach ($parkings as $parking) {
            $endAddress = $parking->getAdresse();
            $endResult = $geocoder->geocodeQuery(GeocodeQuery::create($endAddress));
            if ($endResult->count() > 0) {
                $endResult = $endResult->first();
                $endCoordinates = $endResult->getCoordinates();
                if ($startCoordinates && $endCoordinates) {
                    $distance = $this->calculateDistance($startCoordinates, $endCoordinates);
                    $distances[$parking->getNom()] = round($distance, 2);
                }
            }
        }
        return $distances;
    }

    private function calculateDistance(Coordinates $start, Coordinates $end)
    {
        $lat1 = $start->getLatitude();
        $lon1 = $start->getLongitude();
        $lat2 = $end->getLatitude();
        $lon2 = $end->getLongitude();

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $kilometers = $miles * 1.609344;

        return $kilometers;
    }

    #[Route('/dashboard', name: 'app_reservation_new_step1', methods: ['GET', 'POST'])]
    public function step1new(Request $request): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationStep1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $request->getSession()->set('check-in', $_POST['check-in']);
            $request->getSession()->set('check-out', $_POST['check-out']);
            $request->getSession()->set('adresse', $form->get('adresse')->getData());
            $request->getSession()->set('type_vehicule', $form->get('type_vehicule')->getData());
            return $this->redirectToRoute('app_reservation_new_step2', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/step1.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/parkings', name: 'app_reservation_new_step2', methods: ['GET', 'POST'])]
    public function step2new(Request $request, EntityManagerInterface $em): Response
    {
        $checkin = $request->getSession()->get('check-in');
        $checkout = $request->getSession()->get('check-out');
        $adresse = $request->getSession()->get('adresse');
        $type_vehicule = $request->getSession()->get('type_vehicule');
        $reservation = new Reservation();
        $distances = $this->searchDistance($adresse, $em);
        $form = $this->createForm(ReservationStep2Type::class, $reservation);
        $form->handleRequest($request);
        $parkings = $em->getRepository(Parking::class)->findAll();
        $places = $em->getRepository(Place::class)->findAll();
        $checkinout = $em->getRepository(EntreeSortie::class)->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $request->getSession()->set('check-in', $checkin);
            $request->getSession()->set('check-out', $checkout);
            $request->getSession()->set('type_vehicule', $type_vehicule);
            $request->getSession()->set('place_id', $form->get('place')->getData());
            $request->getSession()->set('price', $_POST['montant']);
            return $this->redirectToRoute('app_reservation_new_step3', [], Response::HTTP_SEE_OTHER);
        }

        $flag = false;
        $timestamp1 = strtotime($checkin);
        $timestamp2 = strtotime($checkout);
        $difference = $timestamp2 - $timestamp1;
        foreach ($distances as $distance) {
            if ($distance <= 5) {
                $flag = true;
                break;
            }
        }

        return $this->render('reservation/step2.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
            'parkings' => $parkings,
            'places' => $places,
            'distances' => $distances,
            'flag' => $flag,
            'type' => $type_vehicule,
            'difference' => $difference,
            'checkinout' => $checkinout,
            'checkin' => $checkin,
            'checkout' => $checkout
        ]);
    }

    #[Route('/payment', name: 'app_reservation_new_step3', methods: ['GET', 'POST'])]
    public function step3new(Request $request, EntityManagerInterface $em): Response
    {
        $checkin = $request->getSession()->get('check-in');
        $checkout = $request->getSession()->get('check-out');
        $type_vehicule = $request->getSession()->get('type_vehicule');
        $place = $request->getSession()->get('place_id');
        $price = $request->getSession()->get('price');
        $reservation = new Reservation();
        $paiement = new Paiement();
        $checkinout = new EntreeSortie();
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $checkinout->setDateEntree(new \DateTime($checkin));
            $checkinout->setDateSortie(new \DateTime($checkout));
            $datestring = date('Y-m-d');
            $date = new \DateTime($datestring);
            $reservation->setDateReservation($date);
            $reservation->setTypeVehicule($type_vehicule);
            $reservation->setClient($this->getUser());
            $reservation->setPlace($place);
            $reservation->setPaiement($paiement);
            $checkinout->setReservation($reservation);
            $checkinout->setPaiement($paiement);
            $em->persist($paiement);
            $em->persist($reservation);
            $em->persist($checkinout);
            $em->flush();

            return $this->redirectToRoute('app_success', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/step3.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
            'price' => $price
        ]);
    }

    #[Route('/success', name: 'app_success')]
    public function success(): Response
    {
        return $this->render('reservation/success.html.twig');
    }

    #[Route('/index', name: 'app_admin')]
    public function admin(): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        return $this->render('reservation/admin.html.twig');
    }

    #[Route('/reservation', name: 'app_reservation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        $reservations = $em->getRepository(Reservation::class)->findAll();
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReservationRepository $reservationRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/show/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $reservationRepository->remove($reservation, true);
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/pdf/{id}', name: 'reservation.pdf')]
    public function generatePdfReservation(Reservation $reservation = null, PdfService $pdf)
    {
        $client = $reservation->getClient();
        $clientName = $client->getNom();
        $clientEmail = $client->getEmail();
        $clientPrenom = $client->getPrenom();
        $clientGsm = $client->getGsm();
        $checkin1 = $reservation->getEntreeSortie()->getDateEntree();
        $checkout1 = $reservation->getEntreeSortie()->getDateSortie();
        $checkin = $checkin1->format('Y-m-d H:i:s');
        $checkout = $checkout1->format('Y-m-d H:i:s');



        $html = $this->render('reservation\resevationPdf.html.twig', [
            'reservation' => $reservation,
            'clientNom' => $clientName,
            'clientEmail' => $clientEmail,
            'clientPrenom' => $clientPrenom,
            'clientGsm' => $clientGsm,
            'checkin' => $checkin,
            'checkout' => $checkout
        ]);


        $pdf->showPdf($html);
    }
}
