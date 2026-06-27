<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Model\StartShip;
use Psr\Log\LoggerInterface;
use App\Repository\StarShipRepository;

#[Route('/api/starships/')]
class StarShipApIController extends AbstractController
{
    #[Route('', methods:['GET'])]
    public function getCollection( StarShipRepository $repository): Response
    {
        $starships = $repository->findAll();
        return $this->json($starships);
    }

    #[Route('{id}', methods: ['GET'])]

    public function get($id, StarShipRepository $repository): Response
    {
        $startShip = $repository->find($id);
        if (!$startShip) {  
            throw $this->createNotFoundException('Starship not found');
        }
        return $this->json($startShip);


    }   
}