<?php

namespace App\Http\Controllers\AuthUser;

use App\facades\CacheDB;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Productimgs;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Cache;

class ProdinfoController extends Controller{
  

public function prodinfo($id){
    //  Cache::flush();
  
 return view("main.pageProduct.prodinfo",['dBProdinfo'=>CacheDB::CacheProdinfo($id)]);
        
  }

}
