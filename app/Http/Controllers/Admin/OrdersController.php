<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrdersController extends Controller
{
    public function neworders()
    {
        $joinorders = DB::table('orders')
            ->select(DB::raw("count(orders.id),orders.*,users.email,users.nameS,users.phone,users.street,users.country,users.city"))
            ->join("users", "orders.user_id", "=", "users.id")
            ->groupBy("orders.id", "users.id")
            ->get();
        return view("admin.orders", compact("joinorders"));
    }
}
