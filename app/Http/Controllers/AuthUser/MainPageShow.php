<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\facades\CacheDBmain;
use Illuminate\Support\Facades\Session;



class MainPageShow extends Controller
{

    public function mainshow()
    {

        return view('main.page1', ["CategoryAll" => CacheDBmain::CacheMainProduct()]);
    }
    public function local_lang(Request $r)
    {
        Session::put("locale", $r->input("locale"));
        return redirect()->back();
    }
}
