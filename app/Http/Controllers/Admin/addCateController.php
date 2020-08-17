<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addCateController extends Controller{
    protected $user;
   
    public function __construct(){
 
      $this->user = Auth::Guard('newuser');
  
    }
   public function showCate(){
        return view("admin.addCate");
   }
   public function addCate(Request $r){
    if($r->hasFile('img')){
        $img_name = $r->file("img")->getClientOriginalName();
        $r->file('img')->storeAs("Cate_img",$img_name,"public");
     }  
     $create = $this->user->User()->Category()->create([
        "name" => $r->input("title"),
        "img" => $img_name,
        "text" => $r->input("text"),
     
    ]);
    $this->user->User()->Category()->save($create); 

     return redirect()->back()->with('success', 'success add'); 


   }

}
