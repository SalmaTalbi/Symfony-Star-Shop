<?php

namespace App\Repository;

use App\Model\StarShip;
use Psr\Log\LoggerInterface;

class StarShipRepository
{
    public function __construct(private LoggerInterface $logger) {

    }
    public function findAll(): array
    {
        $this->logger->info('findAll');

        return [
            new StarShip(
                id: 1,
                name: 'Starship 1',
                description: 'This is the first starship',
                class: 'Starship',
                captain: 'Captain 1',
                status: 'Active',
            ),
            new StarShip(
                id: 2,
                name: 'Starship 2',
                description: 'This is the second starship',
                class: 'Starship',
                captain: 'Captain 2',
                status: 'Active',
            ),
            new StarShip(
                id: 3,
                name: 'Starship 3',
                description: 'This is the third starship',
                class: 'Starship',
                captain: 'Captain 3',
                status: 'Active',
            ),
        ];
    }

    public function find(int $id): ?StarShip
    {
      foreach ($this->findAll() as $ship) {
        if ($ship->getId() === $id) {    
            return $ship;
        }

        return null;
    }
    }
}