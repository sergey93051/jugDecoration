<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller{//rolecats category productimgs
 
     public function productMain($id){
          // dd($id);
        $Catjoinprod=db::table("productimgs")
                    ->join("rolecats","productimgs.id","=","prod_id")
                    ->join("category","cate_id","=","category.id")
                    ->select(DB::raw("count(category.id),category.name,productimgs.*"))
                    ->where('category.id','=',$id)
                    ->groupBy('category.id',"productimgs.id")
                    ->get();
           return view("main.pageProduct.product",compact("Catjoinprod"));
     }



}
