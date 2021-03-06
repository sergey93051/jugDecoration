<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Productimgs;
use Illuminate\Support\Facades\Storage;
use App\Liketot;

class AddProdController extends Controller
{

  protected $user;

  public function __construct()
  {

    $this->user = Auth::Guard('newuser');
  }

  public function showadd()
  {
    $Prod = Productimgs::select(["*"])->get();

    return view("admin.addProd", compact("Prod"));
  }

  public function addProd(Request $r)
  {
    $img_name = "";
    $img2_name = "";
    $img3_name = "";
    $namedir = $r->input("directory");
    if ($r->hasFile('img')) {
      $img_name = $r->file("img")->getClientOriginalName();
      $r->file('img')->storeAs("prodImg__{$namedir}", $img_name, "public");
    }
    if ($r->hasFile('img2')) {
      $img2_name = $r->file("img2")->getClientOriginalName();
      $r->file('img2')->storeAs("prodImg__{$namedir}", $img2_name, "public");
    }
    if ($r->hasFile('img3')) {
      $img3_name = $r->file("img3")->getClientOriginalName();
      $r->file('img3')->storeAs("prodImg__{$namedir}", $img3_name, "public");
    }

    $create = $this->user->User()->Productimgs()->create([
      "directory" => $namedir,
      "img" => $img_name,
      "img_2" => $img2_name,
      "img_3" => $img3_name,
      "title" => $r->input("title"),
      "etitle" => $r->input("etitle"),
      "text" => $r->input("text"),
      "etext" => $r->input("etext"),
      "price" => $r->input("price")
    ]);
    $this->user->User()->Productimgs()->save($create);
    if ($create->id) {
      Liketot::create([
        "tottle" => "0",
        "prod_id" => $create->id,

      ]);
    }

    return redirect()->back()->with('success', 'success add');
  }
}
