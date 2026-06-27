<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\StartShipRepository;
class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(StartShipRepository $starShipRepository): Response
    {

        $greeting = 'Makkaw minions';
        $starships = $starShipRepository->findAll();
        $numberOfStarships = count($starships);

        $starship = $starships[array_rand($starships)];

        return $this->render('main/homepage.html.twig', [
            'greeting' => $greeting,
            'numberOfStarships' => $numberOfStarships,
            'starship' => $starship
        ]);
    }
}
