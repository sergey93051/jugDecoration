<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
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

      $likeProd = db::table("productimgs")
        ->join("like", "productimgs.id", "=", "prod_id")
        ->where("like.user_id", "=", "{$this->user->user()->id}")
        ->select(DB::raw("count(like.id),productimgs.*"))
        ->groupBy('like.id', "productimgs.id")
        ->get();
      $profUser = $this->user->user()->select(['*'])->where("id", $this->user->user()->id)->get();
      return view("main.prof", compact("profUser", "likeProd"));
    } else {
      return redirect("/");
    }
  }


  public function changeProf(ProfileRequest $r)
  {
    $update = $this->user->user()->update([
      'nameS' => $r->input('nameS'),
      'phone' => $r->input('phone'),
      'postcode' => $r->input('postcode'),
      'country' => $r->input('country'),
      "city" => $r->input('city')
    ]);
  }
  public function likeprod()
  {
  }
}
