<?php

namespace App\Controller;

use App\Entity\EntreeSortie;
use App\Form\EntreeSortieType;
use App\Repository\EntreeSortieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/entree_sortie')]
class EntreeSortieController extends AbstractController
{
    #[Route('/', name: 'app_entree_sortie_index', methods: ['GET'])]
    public function index(EntreeSortieRepository $entreeSortieRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->redirectToRoute('app_login');
        }
        return $this->render('entree_sortie/index.html.twig', [
            'entree_sorties' => $entreeSortieRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_entree_sortie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntreeSortieRepository $entreeSortieRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->redirectToRoute('app_login');
        }
        $entreeSortie = new EntreeSortie();
        $form = $this->createForm(EntreeSortieType::class, $entreeSortie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entreeSortieRepository->save($entreeSortie, true);

            return $this->redirectToRoute('app_entree_sortie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('entree_sortie/new.html.twig', [
            'entree_sortie' => $entreeSortie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entree_sortie_show', methods: ['GET'])]
    public function show(EntreeSortie $entreeSortie): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->redirectToRoute('app_login');
        }
        return $this->render('entree_sortie/show.html.twig', [
            'entree_sortie' => $entreeSortie,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_entree_sortie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntreeSortie $entreeSortie, EntreeSortieRepository $entreeSortieRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->redirectToRoute('app_login');
        }
        $form = $this->createForm(EntreeSortieType::class, $entreeSortie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entreeSortieRepository->save($entreeSortie, true);

            return $this->redirectToRoute('app_entree_sortie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('entree_sortie/edit.html.twig', [
            'entree_sortie' => $entreeSortie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entree_sortie_delete', methods: ['POST'])]
    public function delete(Request $request, EntreeSortie $entreeSortie, EntreeSortieRepository $entreeSortieRepository): Response
    {
        if (
            !$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())
        ) {
            return $this->redirectToRoute('app_login');
        }
        if ($this->isCsrfTokenValid('delete' . $entreeSortie->getId(), $request->request->get('_token'))) {
            $entreeSortieRepository->remove($entreeSortie, true);
        }

        return $this->redirectToRoute('app_entree_sortie_index', [], Response::HTTP_SEE_OTHER);
    }
}
