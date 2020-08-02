<?php

namespace App\Http\Controllers\AuthUser;

use App\facades\CacheDB;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Productimgs;
// use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Cache;

class ProdinfoController extends Controller{
  

public function sentProdinfo($id){
   $DBProdinfo = "";
   if (Cache::has("cache{$id}")) {
      $DBProdinfo = Cache::get("cache{$id}");
   }else{
      $DBProdinfo = CacheDB::CacheProdinfo($id);
   }

      return view("main.pageProduct.prodinfo",["prodinfo" => $DBProdinfo]);
       
     }

}
