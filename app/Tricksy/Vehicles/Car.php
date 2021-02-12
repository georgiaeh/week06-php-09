<?php

declare(strict_types=1);
namespace App\Tricksy\Vehicles;
use App\Tricksy\Person;

class Car extends Vehicle
{
    protected $driver;

    public function __construct()
    {
        $this->driver = collect();
    }

    public function setDriver(Person $driver) : Vehicle
    {
        $this->driver->push($driver);
        return $this;
    }

    public function occupants() 
    {
        return $fullList = $this->driver->merge($this->passengers);
    }

}