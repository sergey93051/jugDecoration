<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{

     public function productMain($id)
     {

          $Catjoinprod = db::table("productimgs")
               ->join("rolecats", "productimgs.id", "=", "prod_id")
               ->join("category", "cate_id", "=", "category.id")
               ->join("liketot", "liketot.prod_id", "=", "productimgs.id")
               ->select(DB::raw("productimgs.*,liketot.tottle"))
               ->where('category.id', '=', $id)
               ->get();

          return view("main.pageProduct.product", compact("Catjoinprod"));
     }
}
