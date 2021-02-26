<?php

namespace App\Http\Controllers\AuthUser;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthLogController extends Controller
{

    public function logouts(Request $r)
    {
        if ($r->has('_token')) {
            Auth::guard("newuser")->logout();
            return redirect("/");
        }
    }
    public function Authorization(LoginRequest $r)
    {
        return true;
    }
}
