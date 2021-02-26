<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
  private $user;

  public function __construct()
  {
    $this->user = Auth::guard("newuser");
  }

  public function showprof()
  {

    if ($this->user->check()) {

      $profUser = $this->user->user()->select(['*'])->where("id", $this->user->user()->id)->get();
      return view("main.prof", compact("profUser"));
    } else {
      return redirect("/");
    }
  }


  public function changeProf(ProfileRequest $r)
  {
    $this->user->user()->update([
      'nameS' => $r->input('nameS'),
      'phone' => $r->input('phone'),
      'street' => $r->input('street'),
      'country' => $r->input('country'),
      "city" => $r->input('city')
    ]);
  }
}
