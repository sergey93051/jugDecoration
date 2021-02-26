<?php

namespace App\facades;

use Illuminate\Support\Facades\Facade;


class Cookiec extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "Cookiec";
    }
}
