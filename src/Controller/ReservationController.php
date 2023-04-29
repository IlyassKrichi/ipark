<?php


namespace App\Controller;
use App\Entity\Parking;
use Geocoder\Model\Coordinates;
use Geocoder\Query\GeocodeQuery;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Client\Common\HttpMethodsClient;
use Psr\Http\Client\ClientInterface;
use App\Entity\Reservation;
use App\Form\ReservationStep1Type;
use App\Form\ReservationStep2Type;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Geocoder\Provider\Nominatim\Nominatim;
use Geocoder\StatefulGeocoder;
use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }

    private function searchDistance(string $startAddress, EntityManagerInterface $em): array
    {
        $parkingRepo = $em->getRepository(Parking::class);
        $client = new GuzzleAdapter(new Client());
        $rootUrl = 'https://nominatim.openstreetmap.org/';
        $userAgent = 'iPark/1.0';
        $provider = new Nominatim($client, $rootUrl, $userAgent);
        $geocoder = new StatefulGeocoder($provider);
        $startResult = $geocoder->geocodeQuery(GeocodeQuery::create($startAddress))->first();
        $distances= array();
        $parkings = $parkingRepo->findAll();
        $startCoordinates = $startResult->getCoordinates();
        foreach ($parkings as $parking) {
            $endAddress = $parking->getAdresse();
            $endResult = $geocoder->geocodeQuery(GeocodeQuery::create($endAddress));
            if ($endResult->count() > 0)
            {
                $endResult = $endResult->first();
                $endCoordinates = $endResult->getCoordinates();
                if ($startCoordinates && $endCoordinates) {
                    $distance = $this->calculateDistance($startCoordinates, $endCoordinates);
                    $distances[$parking->getNom()] = $distance;
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

    private function quicksort(array $arr): array
    {
        $stack = array(array(0, count($arr) - 1));
        while ($stack) {
            list($left, $right) = array_pop($stack);
            if ($left < $right) {
                $pivot = $arr[$right];
                $i = $left - 1;
                for ($j = $left; $j < $right; $j++) {
                    if ($arr[$j] <= $pivot) {
                        $i++;
                        list($arr[$i], $arr[$j]) = array($arr[$j], $arr[$i]);
                    }
                }
                list($arr[$i+1], $arr[$right]) = array($arr[$right], $arr[$i+1]);
                $stack[] = array($left, $i);
                $stack[] = array($i+2, $right);
            }
        }
        return $arr;
    }

    #[Route('/step1new', name: 'app_reservation_new_step1', methods: ['GET', 'POST'])]
    public function step1new(Request $request): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationStep1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $request->getSession()->set('adresse', $form->get('adresse')->getData());
            $request->getSession()->set('date_reservation', $form->get('date_reservation')->getData());
            $request->getSession()->set('type_vehicule', $form->get('type_vehicule')->getData());
            return $this->redirectToRoute('app_reservation_new_step2', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/step1.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/step2new', name: 'app_reservation_new_step2', methods: ['GET', 'POST'])]
    public function step2new(Request $request, EntityManagerInterface $em): Response
    {
        $adresse = $request->getSession()->get('adresse');
        $date_reservation = $request->getSession()->get('date_reservation');
        $type_vehicule = $request->getSession()->get('type_vehicule');
        $reservation = new Reservation();
        $distances = $this->searchDistance($adresse, $em);
        $form = $this->createForm(ReservationStep2Type::class, $reservation , ['keys' => array_keys($distances)]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $request->getSession()->remove('adresse');
            $reservation->setDateReservation($date_reservation);
            $reservation->setTypeVehicule($type_vehicule);
            $reservation->setClient($this->getUser());
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/step2.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/step1edit', name: 'app_reservation_edit_step1', methods: ['GET', 'POST'])]
    public function step1edit(Request $request, Reservation $reservation): Response
    {
        $form = $this->createForm(ReservationStep1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $request->getSession()->set('adresse', $form->get('adresse')->getData());
            $request->getSession()->set('date_reservation', $form->get('date_reservation')->getData());
            $request->getSession()->set('type_vehicule', $form->get('type_vehicule')->getData());
            return $this->redirectToRoute('app_reservation_edit_step2', ['id' => $reservation->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit1.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/step2edit', name: 'app_reservation_edit_step2', methods: ['GET', 'POST'])]
    public function step2edit(Request $request, Reservation $reservation, EntityManagerInterface $em): Response
    {
        $adresse = $request->getSession()->get('adresse');
        $date_reservation = $request->getSession()->get('date_reservation');
        $type_vehicule = $request->getSession()->get('type_vehicule');
        $form = $this->createForm(ReservationStep2Type::class, $reservation , ['adresse' => $adresse]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $request->getSession()->remove('adresse');
            $reservation->setDateReservation($date_reservation);
            $reservation->setTypeVehicule($type_vehicule);
            $reservation->setClient($this->getUser());
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit2.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $reservationRepository->remove($reservation, true);
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
}


