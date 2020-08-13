<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller{
   private $user;

   public function __construct(){
       $this->user = Auth::guard("newuser");
   }

    public function showprof(){   
    
         if (Auth::guard("newuser")->check()){
            $profUser = $this->user->user()->select(['*'])->get();
          return view("main.prof",compact("profUser"));
    
        }else{
             return redirect("/");
         }
    }


    public function changeProf(ProfileRequest $r){
        $update = $this->user->user()->update([
            'nameS'=>$r->input('nameS'),
            'phone'=>$r->input('phone'),
            'postcode'=>$r->input('postcode'),
            'country'=>$r->input('country'),
            "city"=>$r->input('city')
      ]);

     exit;
   }
   
    
    
}
