<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\orderinfo;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class NewOrders extends Controller
{
    protected $user;

    public function __construct()
    {

        $this->user = Auth::Guard('newuser');
    }

    public function showid(Request $r)
    {
        if (Session::has('orderId')) {
            Session::forget('orderId');
        }
        Session::put('orderId', $r->input('id'));
    }

    public function showorder()
    {

        $orderinfo = $this->user->User()->Productimgs()->select(["id", 'title', "price"])->where("id", Session::get("orderId"))->get();

        return view("main.neworder.neworder", compact("orderinfo"));
    }

    public function orderFull(Request $r)
    {

        $orders = [
            "prod" => $r->input('prod'),
            "price" => $r->input('price'),
            "total" => $r->input('total')
        ];


        $create = $this->user->User()->Orders()->create($orders);
        $this->user->User()->Orders()->save($create);
        Mail::to("arm.aleqs.94@mail.ru")->send(new orderinfo($orders));
    }
}
