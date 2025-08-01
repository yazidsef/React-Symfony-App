<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParticipationlistController extends AbstractController
{
    #[Route('/participationlist', name: 'app_participationlist')]
    public function index(): Response
    {
        return $this->render('participationlist/index.html.twig', [
            'controller_name' => 'ParticipationlistController',
        ]);
    }
}
