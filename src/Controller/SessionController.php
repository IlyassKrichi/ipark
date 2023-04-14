<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(Request $request, SessionInterface $session): Response
    {
        $session = $request->getSession();
        if (!$session->isStarted() || ($session->getMetadataBag()->getLifetime() > 0 && time() - $session->getMetadataBag()->getLastUsed() > $session->getMetadataBag()->getLifetime())) {
            // Définir la variable de session 'session_expired'
            $session->set('session_expired', true);
            
            // Rediriger vers la page de connexion
            return $this->redirectToRoute('app_login');
        }
        if ($session->has(name:'nbVisite')){
            $nbreVisite= $session->get(name: 'nbVisite')+1 ;
            
        }
        else{
            $nbreVisite = 1;
        }
        $session->set('nbVisite', $nbreVisite);
        return $this->render('session/index.html.twig');
    }
}
