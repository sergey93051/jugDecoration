<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//  use App\facades\Policies;
// use App\Productimgs;
// use Illuminate\Support\Facades\Gate;
//  use Illuminate\Support\Facades\Auth;

// use App\Policies\AdminPolicy;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{

    public function adminshow(){
            return view("admin.layouts.index");
    }
}
