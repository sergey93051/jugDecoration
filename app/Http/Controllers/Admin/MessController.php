<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessController extends Controller
{
    public function showMessage()
    {
        $joinmess = DB::table('Helpmess')
            ->select(DB::raw("count(Helpmess.id),Helpmess.*,users.email,users.nameS,users.phone,users.street,users.country,users.city"))
            ->join("users", "Helpmess.user_id", "=", "users.id")
            ->groupBy("Helpmess.id", "users.id")
            ->get();
        return view("admin.mess", compact('joinmess'));
    }
}
