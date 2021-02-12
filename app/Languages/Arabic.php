<?php

declare(strict_types=1);
namespace App\Languages;

class Arabic extends Language
{
    protected $name = "Arabic";
    protected $hello = "مرحبا";

    public function hello() : string
    {
        return $this->hello;
    }
}