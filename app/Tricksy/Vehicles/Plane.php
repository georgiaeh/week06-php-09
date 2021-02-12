<?php

declare(strict_types=1);
namespace App\Tricksy\Vehicles;
use App\Tricksy\Person;

class Plane extends Vehicle
{
    private $pilot;
    private $copilot;
    private $stewards;

    public function __construct()
    {
        $this->pilot = collect();
        $this->copilot = collect();
    }

    public function setPilot(Person $pilot) : Vehicle
    {
        $this->pilot->push($pilot);
        return $this;
    }

    public function setCopilot(Person $copilot) : Vehicle
    {
        $this->copilot->push($copilot);
        return $this;
    }

    public function setStewards(array $stewards) : Vehicle
    {   
        $this->stewards = collect($stewards);
        return $this;
    }

    public function occupants()
    {
        return $fullList = $this->pilot
            ->merge($this->copilot)
            ->merge($this->passengers)
            ->merge($this->stewards);
    }
}