<?php

namespace App\facades;

 use Illuminate\Support\Facades\Facade;

class CacheDBmain extends Facade{
    protected static function getFacadeAccessor(){
          return "CacheDBmain";
      }
    }
