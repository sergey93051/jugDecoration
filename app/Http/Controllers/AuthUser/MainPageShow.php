<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\facades\CacheDBmain;
use Illuminate\Support\Facades\Session;



class MainPageShow extends Controller{
    
    public function mainshow(){
         return view('main.page1',["Category"=>CacheDBmain::CacheMainProduct()]);
    }
    public function local_lang($locale){
           Session::put("locale",$locale);
           return redirect()->back();
    }

    
}
