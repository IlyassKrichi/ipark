<?php

namespace App\Controller;

use App\Entity\Réservation;
use App\Form\RéservationType;
use App\Repository\RéservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/r/servation')]
class RéservationController extends AbstractController
{
    #[Route('/', name: 'app_r_servation_index', methods: ['GET'])]
    public function index(RéservationRepository $réservationRepository): Response
    {
        return $this->render('réservation/index.html.twig', [
            'r_servations' => $réservationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_r_servation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RéservationRepository $réservationRepository): Response
    {
        $réservation = new Réservation();
        $form = $this->createForm(RéservationType::class, $réservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $réservationRepository->save($réservation, true);

            return $this->redirectToRoute('app_r_servation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('réservation/new.html.twig', [
            'r_servation' => $réservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_servation_show', methods: ['GET'])]
    public function show(Réservation $réservation): Response
    {
        return $this->render('réservation/show.html.twig', [
            'r_servation' => $réservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_r_servation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Réservation $réservation, RéservationRepository $réservationRepository): Response
    {
        $form = $this->createForm(RéservationType::class, $réservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $réservationRepository->save($réservation, true);

            return $this->redirectToRoute('app_r_servation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('réservation/edit.html.twig', [
            'r_servation' => $réservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_servation_delete', methods: ['POST'])]
    public function delete(Request $request, Réservation $réservation, RéservationRepository $réservationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$réservation->getId(), $request->request->get('_token'))) {
            $réservationRepository->remove($réservation, true);
        }

        return $this->redirectToRoute('app_r_servation_index', [], Response::HTTP_SEE_OTHER);
    }
}
