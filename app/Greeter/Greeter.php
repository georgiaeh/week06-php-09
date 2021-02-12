<?php

declare(strict_types=1);
namespace App\Greeter;
use App\Languages as Lang;

class Greeter
{
    public function __construct(Lang $lang)
    {
        $this-> lang = $lang;
    }

    public function greet()
    {
        return $lang->hello();
    }    
}