<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConnexionController extends AbstractController
{
    #[Route('/', name: 'connexion')]
    public function index(): Response
    {
        return $this->render('connexion/connexion.html.twig', [
            'controller_name' => 'connexion',
        ]);
    }
}
