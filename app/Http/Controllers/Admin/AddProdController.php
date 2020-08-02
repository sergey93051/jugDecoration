<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Productimgs;
use Illuminate\Support\Facades\Storage;


class AddProdController extends Controller{

   protected $user;
   
   public function __construct(){

     $this->user = Auth::Guard('newuser');
 
   }

      public function showadd(){
            $Productimgs = Productimgs::select(["*"])->get();
           
          return view("admin.addProd",['prodimg' => $Productimgs]);
      }

      public function addProd(Request $r){
        $name = '';
        $a = "";
       if($r->hasFile('img')){
           $name = $r->file("img")->getClientOriginalName();
           $r->file('img')->storeAs("productImg",$name,"public");
           $n = $r->file('img');

        }  

         $create = $this->user->User()->Productimgs()->create([
             "img" => $name,
             "title" => $r->input("title"),
             "after" => $r->input("after"),
             "text" => $r->input("text"),
             "price" => $r->input("price")
         ]);
         $this->user->User()->Productimgs()->save($create); 
           dd($n);
      //  return redirect()->back()->with('success', 'success add');  
    }


}
