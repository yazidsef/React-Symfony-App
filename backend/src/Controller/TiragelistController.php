<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TiragelistController extends AbstractController
{
    #[Route('/tiragelist', name: 'app_tiragelist')]
    public function index(): Response
    {
        return $this->render('tiragelist/index.html.twig', [
            'controller_name' => 'TiragelistController',
        ]);
    }
}
