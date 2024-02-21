<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CampController extends AbstractController
{
    #[Route('/camp', name: 'app_camp')]
    public function index(): Response
    {
        return $this->render('camp/index.html.twig', [
            'controller_name' => 'CampController',
        ]);
    }
}
