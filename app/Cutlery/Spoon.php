<?php

declare(strict_types=1);
namespace App\Cutlery;

class Spoon
{
    protected $scoops;

    public function __construct()
    {
        $this->scoops = 0;
    }

    public function scoop() : Spoon
    {
        $this->scoops += 1;
        return $this;
    }

    public function howManyScoops() : int
    {
        return $this->scoops;
    }
}