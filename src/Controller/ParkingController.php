<?php

namespace App\Controller;

use App\Entity\Parking;
use App\Form\ParkingType;
use App\Repository\ParkingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/parking')]
class ParkingController extends AbstractController
{
    #[Route('/', name: 'app_parking_index', methods: ['GET'])]
    public function index(ParkingRepository $parkingRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        return $this->render('parking/index.html.twig', [
            'parkings' => $parkingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_parking_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ParkingRepository $parkingRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        $parking = new Parking();
        $form = $this->createForm(ParkingType::class, $parking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $parkingRepository->save($parking, true);

            return $this->redirectToRoute('app_parking_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('parking/new.html.twig', [
            'parking' => $parking,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_parking_show', methods: ['GET'])]
    public function show(Parking $parking): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        return $this->render('parking/show.html.twig', [
            'parking' => $parking,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_parking_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Parking $parking, ParkingRepository $parkingRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        $form = $this->createForm(ParkingType::class, $parking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $parkingRepository->save($parking, true);

            return $this->redirectToRoute('app_parking_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('parking/edit.html.twig', [
            'parking' => $parking,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_parking_delete', methods: ['POST'])]
    public function delete(Request $request, Parking $parking, ParkingRepository $parkingRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        if ($this->isCsrfTokenValid('delete' . $parking->getId(), $request->request->get('_token'))) {
            $parkingRepository->remove($parking, true);
        }

        return $this->redirectToRoute('app_parking_index', [], Response::HTTP_SEE_OTHER);
    }
}
