<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Commandes;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CommandesController extends AbstractController
{
    #[Route('/commandes', name: 'app_commandes')]
    public function index(): Response
    {
        return $this->render('commandes/index.html.twig', [
            'controller_name' => 'CommandesController',
        ]);
    }

    //endpoint pour récupérer toutes les commandes
    #[Route('/sf/commandes', name: 'api_commandes', methods: ['GET'])]
    public function getAllCommandes(EntityManagerInterface $em): JsonResponse
    {
        $commandes = $em->getRepository(Commandes::class)->findAll();
        $data = [];

        foreach ($commandes as $commande) {
            $data[] = [
                'id' => $commande->getId(),
                'date' => $commande->getDate(),
                'id_produit' => $commande->getIdProduit(),  
                'status' => $commande->getStatus() ?? 'Unknown',
                'price' => $commande->getPrice() ?? 'Unknown',
                'game' => $commande->getGame() ?? 'Unknown',
                'comment' => $commande->getComment() ?? 'Unknown',
                'email_sent' => $commande->getEmailSent() ?? 'Unknown',
                'is_new' => $commande->getIsNew() ?? 'Unknown',
                'stacking_number' => $commande->getStackingNumber() ?? 'Unknown',
                'uuid_vainkeur' => $commande->getUuidVainkeur() ?? 'Unknown',
                // Ajoute ici les autres champs nécessaires
            ];
        }

        return new JsonResponse($data);
    }

    //endpoint pour ajouter une commande
    #[Route('/sf/new-commande', name: 'add_commande', methods: ['POST'])]
    public function addCommande(Request $request, EntityManagerInterface $em): JswonResponse
    {

        $data = json_decode($request->getContent(),true);
        if(!$data){
            return new JsonResponse(['success'=>false]);
        }
        $commande = new Commandes();
        $commande = new Commandes();
        $commande->setDate(new \DateTime());
        $commande->setIdProduit($data['id_produit']);
        $commande->setStatus($data['status']);
        $commande->setPrice($data['price']);
        $commande->setGame($data['game']);
        $commande->setComment($data['comment']);
        $commande->setEmailSent($data['email_sent']);
        $commande->setIsNew($data['is_new']);
        $commande->setStackingNumber($data['stacking_number']);
        $commande->setUuidVainkeur($data['uuid_vainkeur']);

        $em->persist($commande);
        $em->flush();


        return new JsonResponse([
            'success'=> true,
            'id'=>$commande->getId()            
        ]);
    }

    //endpoint pour modifier une commande
    #[Route('/sf/edit-commande/{id}', name: 'edit_commande', methods: ['PUT'])]
    public function editCommande(Request $request, EntityManagerInterface $em, int $id): JswonResponse
    {
        

        $data = json_decode($request->getContent(),true);
        if(!$data){
            return new JsonResponse(['success'=>false]);
        }
        $commande = $em->getRepository(Commandes::class)->find($id);
        if(!$commande){
            return new JsonResponse(['success'=>false]);
        }
        
        $commande = new Commandes();
        $commande->setDate(new \DateTime());
        $commande->setIdProduit($data['id_produit']);
        $commande->setStatus($data['status']);
        $commande->setPrice($data['price']);
        $commande->setGame($data['game']);
        $commande->setComment($data['comment']);
        $commande->setEmailSent($data['email_sent']);
        $commande->setIsNew($data['is_new']);
        $commande->setStackingNumber($data['stacking_number']);
        $commande->setUuidVainkeur($data['uuid_vainkeur']);
        $em->flush();

        return new JsonResponse([
            'success'=> true,
            'id'=>$commande->getId()            
        ]);
    }
}
