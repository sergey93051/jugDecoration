<?php

namespace App\Http\Controllers\AuthUser;

use App\facades\CacheDB;
use App\Http\Controllers\Controller;


class ProdinfoController extends Controller
{


  public function prodinfo($id)
  {

    return view("main.pageProduct.prodinfo", ['dBProdinfo' => CacheDB::CacheProdinfo($id)]);
  }
}
