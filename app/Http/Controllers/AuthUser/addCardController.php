<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\facades\Cookiec;
use Dotenv\Result\Result;
use Illuminate\Support\Facades\Redirect;

class addCardController extends Controller
{


    public function mycardsShow()
    {

        $cartarray = isset($_COOKIE["shopp"]) ? [json_decode($_COOKIE["shopp"])] : "[]";
        return view("main.mycard.mycardshop", compact("cartarray"));
    }
    public function mycards(Request $r)
    {
        if (!empty($r->input("ids"))) {
            Cookiec::Cardshop(
                $r->input("ids"),
                $r->input('img'),
                $r->input('itemNameProd'),
                $r->input('totalPrace'),
                $r->input('totalcash'),
            );
        } else {
            return Redirect()->back();
        }
    }
    public function mycartdel($id)
    {
        $delcookitem = (array)json_decode($_COOKIE["shopp"], true);
        $res = array();
        foreach ($delcookitem as  $v) {

            if ($v["id"] != $id) {
                array_push($res, $v);
            }
        }
        setcookie("shopp", json_encode($res), time() + (500000 * 30), "/");
        return redirect()->back();
    }
}
