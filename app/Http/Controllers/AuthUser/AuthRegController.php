<?php

namespace App\Http\Controllers\AuthUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
class AuthRegController extends Controller{
    public function registerView(){
              return view("main.prof");
    }
   
 public function register(RegistrRequest $r){
        $data = [
            'email'=>$r->input('email'),
            'password' =>$r->input('password'),
           ];
      $user = User::create($data);
      Auth::guard('newuser')->login($user);
    }
}
