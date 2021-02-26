<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::guard("newuser");
    }
    public function favorite()
    {
        if ($this->user->check()) {
            $id = $this->user->user()->id;
            $likeProd = db::table("productimgs")
                ->join("like", "productimgs.id", "=", "prod_id")
                ->where("like.user_id", "=", "{$id}")
                ->select(DB::raw("count(like.id),productimgs.*"))
                ->groupBy('like.id', "productimgs.id")
                ->get();
            return view("main.favorite.indexfav", compact("likeProd"));
        } else {
            return redirect("/");
        }
    }
}
