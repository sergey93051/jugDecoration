<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessController extends Controller
{
    public function showMessage()
    {
        $joinmess = DB::table('helpmess')
            ->select(DB::raw("count(helpmess.id),helpmess.*,users.email,users.nameS,users.phone,users.street,users.country,users.city"))
            ->join("users", "helpmess.user_id", "=", "users.id")
            ->groupBy("helpmess.id", "users.id")
            ->get();
        return view("admin.mess", compact('joinmess'));
    }
}
