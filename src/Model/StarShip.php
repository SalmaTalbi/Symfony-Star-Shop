<?php

namespace App\Model;

class StarShip
{
    public function __construct(
        private int $id,
        private string $name,
        private string $description,
        private string $class,
        private string $captain,
        private string $status,
    ) {
        
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getCaptain(): string
    {
        return $this->captain;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}