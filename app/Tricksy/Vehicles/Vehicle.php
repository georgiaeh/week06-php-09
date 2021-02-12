<?php

declare(strict_types=1);
namespace App\Tricksy\Vehicles;

abstract class Vehicle
{
    protected $passengers;

    public function setPassengers(array $passengers) : Vehicle
    {   
        $this->passengers = collect($passengers);
        return $this;
    }

    abstract function occupants();

    public function listOccupants() : array
    {
        return $this->occupants()->map(function ($person) {
            return $person->getName();
        })->all();
    }

}