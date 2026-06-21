<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {

        $greeting = 'Makkaw minions';
        $numberOfMinions = "436";

        $supremeOrdersOfTheDay = [
            "planetToDestroy" => "Earth",
            "planetToConquer" => "Mars",
            "planetToRule" => "Jupiter"
        ];

        return $this->render('main/homepage.html.twig', [
            'greeting' => $greeting,
            'numberOfMinions' => $numberOfMinions,
            'supremeOrdersOfTheDay' => $supremeOrdersOfTheDay
        ]);
    }
}
