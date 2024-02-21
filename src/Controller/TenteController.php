<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TenteController extends AbstractController
{
    #[Route('/tente', name: 'app_tente')]
    public function index(): Response
    {
        return $this->render('tente/index.html.twig', [
            'controller_name' => 'TenteController',
        ]);
    }
}
