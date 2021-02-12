<?php

declare(strict_types=1);
namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{
        
    public function scoop() : Spoon
    {
        $this->scoops += 2;
        return $this;
    }

}