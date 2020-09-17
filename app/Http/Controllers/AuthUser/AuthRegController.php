<?php

namespace App\Http\Controllers\AuthUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
class AuthRegController extends Controller{
    public function registerView(){
              return view("main.prof");
    }
   
 public function register(RegistrRequest $r){

        $user = User::create([
            'email'=>$r->input('email'),
            'nameS'=>$r->input('nameS'),
            'phone'=>$r->input('phone'),
            'postcode'=>$r->input('postcode'),
            'country'=>$r->input('country'),
            "city"=>$r->input('city'),
            'password' =>$r->input('password')   
        ]);
        Auth::guard('newuser')->login($user);
        return true;
    }
}
