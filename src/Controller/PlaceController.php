<?php

namespace App\Controller;

use App\Entity\Place;
use App\Form\PlaceType;
use App\Repository\PlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/place')]
class PlaceController extends AbstractController
{
    #[Route('/', name: 'app_place_index', methods: ['GET'])]
    public function index(PlaceRepository $placeRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        return $this->render('place/index.html.twig', [
            'places' => $placeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_place_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PlaceRepository $placeRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        $place = new Place();
        $form = $this->createForm(PlaceType::class, $place);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $placeRepository->save($place, true);

            return $this->redirectToRoute('app_place_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('place/new.html.twig', [
            'place' => $place,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_place_show', methods: ['GET'])]
    public function show(Place $place): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        return $this->render('place/show.html.twig', [
            'place' => $place,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_place_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Place $place, PlaceRepository $placeRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        $form = $this->createForm(PlaceType::class, $place);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $placeRepository->save($place, true);

            return $this->redirectToRoute('app_place_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('place/edit.html.twig', [
            'place' => $place,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_place_delete', methods: ['POST'])]
    public function delete(Request $request, Place $place, PlaceRepository $placeRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->render('error/404.html.twig');
        }
        if ($this->isCsrfTokenValid('delete' . $place->getId(), $request->request->get('_token'))) {
            $placeRepository->remove($place, true);
        }

        return $this->redirectToRoute('app_place_index', [], Response::HTTP_SEE_OTHER);
    }
}
