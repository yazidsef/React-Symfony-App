<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToplistController extends AbstractController
{
    #[Route('/toplist', name: 'app_toplist')]
    public function index(): Response
    {
        return $this->render('toplist/index.html.twig', [
            'controller_name' => 'ToplistController',
        ]);
    }
}
