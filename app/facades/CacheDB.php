<?php

namespace App\facades;

 use Illuminate\Support\Facades\Facade;

class CacheDB extends Facade{
    protected static function getFacadeAccessor(){
          return "CacheDB";
      }
    }
?>