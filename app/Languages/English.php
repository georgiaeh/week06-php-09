<?php

declare(strict_types=1);
namespace App\Languages;

class English extends Language
{
    protected $name = "English";
    protected $hello = "Hello";

    public function hello() : string
    {
        return $this->hello;
    }
}