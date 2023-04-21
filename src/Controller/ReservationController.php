<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationStep1Type;
use App\Form\ReservationStep2Type;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
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
