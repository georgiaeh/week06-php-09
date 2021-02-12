<?php

declare(strict_types=1);
namespace App\Languages;

class French extends Language
{
    protected $name = "French";
    protected $hello = "Bonjour";

    public function hello() : string
    {
        return $this->hello;
    }
}