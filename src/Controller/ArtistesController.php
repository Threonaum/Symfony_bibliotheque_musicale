<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArtistesController extends AbstractController
{
    #[Route('/', name: 'artistes')]
    public function index(): Response
    {
        return $this->render('artistes/artistes.html.twig', [
            'controller_name' => 'artistes',
        ]);
    }
}
