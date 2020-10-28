<?php

namespace App\DBCache;

use Illuminate\Support\Facades\Cache;
use App\Productimgs;


class CacheProdinfo
{

  public function CacheProdinfo($id)
  {

    return Productimgs::select(["*"])->where("id", "=", $id)->get();
    //   if (Cache::has("cache{$id}")) {
    //    return Cache::get("cache{$id}");
    //   }
    //  else{
    //    return Cache::remember("cache{$id}", 172800, function () use($id) {


    //      });
    //   }





  }
}
