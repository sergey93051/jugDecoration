<?php

namespace App\Policies;
use Illuminate\Support\Facades\Auth;

class AdminPolicy{
  
    protected $auth;

   public function __construct(){
       $this->auth =  Auth::guard("newuser");
   }

   public function AdminPolicy(){
    $user = $this->auth->user();
    if ($this->auth->check()){
        foreach($user->admins as $role):
        
            if ($role->adminName === "Admin") {
                    return true;
            }else{
                return false;
            }
        endforeach;
    }else{
        return false;
    }
         
   }
}
