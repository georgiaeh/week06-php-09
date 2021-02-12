<?php

declare(strict_types=1);
namespace App\Tricksy\Vehicles;
use App\Tricksy\Person;

class Boat extends Vehicle
{
    private $captain;

    public function __construct()
    {
        $this->captain = collect();
    }

    public function setCaptain(Person $captain) : Vehicle
    {
        $this->captain->push($captain);
        return $this;
    }

    public function occupants()
    {
        return $fullList = $this->captain->merge($this->passengers);
    }
}