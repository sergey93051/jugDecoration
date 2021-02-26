<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Mail\Orderinfo;
use Illuminate\Support\Facades\Mail;


class NewOrders extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::Guard('newuser');
    }
    public function  vieworderpage()
    {
        return view("main.neworder.neworder");
    }
    public function showorder(Request $request)
    {
        $data = [
            "itemNameProd" => $request->input("itemNameProd"),
            "totalPrace" => $request->input("totalPrace"),
            "totalcash" => $request->input("totalcash")
        ];
        Session::put('orderproduct', $data);
        return redirect('/order');
    }

    public function orderFull(Request $r)
    {

        $orders = [
            "prod" => $r->input('prod'),
            "price" => $r->input('price'),
            "total" => $r->input('total')
        ];

        //arm.aleqs.94@mail.ru
        $create = $this->user->User()->Orders()->create($orders);
        $this->user->User()->Orders()->save($create);
        Mail::to("sergey93051@mail.ru")->send(new Orderinfo($orders));
    }
}
