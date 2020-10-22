<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\User;
use Illuminate\Support\Facades\DB;
use App\Liketot;


class ProductController extends Controller
{ //rolecats category productimgs

     public function productMain($id)
     {

          // $liketot = Liketot::select("tottle")->where("prod_id", $id)->get();

          $Catjoinprod = db::table("productimgs")
               ->join("rolecats", "productimgs.id", "=", "prod_id")
               ->join("category", "cate_id", "=", "category.id")
               ->join("liketot", "liketot.prod_id", "=", "productimgs.id")
               ->select(DB::raw("count(category.id),productimgs.*,liketot.tottle"))
               ->where('category.id', '=', $id)
               ->groupBy('category.id', "productimgs.id", "liketot.id")
               ->get();

          return view("main.pageProduct.product", compact("Catjoinprod"));
     }
}
