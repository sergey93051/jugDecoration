<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Productimgs;
use Illuminate\Support\Facades\Session;



class MainPageShow extends Controller{
    
    public function mainshow(){
         $Productimgs = Productimgs::select(["*"])->get();
         return view('main.page1',["prodimg"=>$Productimgs]);
    }
    public function local_lang($locale){
      Session::put("locale",$locale);
       return redirect()->back();
    }

    
}
