<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\RoleCate;

class AddCateController extends Controller
{
  protected $user;

  public function __construct()
  {

    $this->user = Auth::Guard('newuser');
  }
  public function showCate()
  {
    $cat = $this->user->User()->Category()->select(['*'])->get();
    $roleCate = RoleCate::select(["*"])->get();
    return view("admin.addCate", compact(["cat", "roleCate"]));
  }

  public function catdel($id)
  {


    $this->user->User()->Category()->delete($id);
    return redirect()->back();
  }

  public function addCate(Request $r)
  {
    if ($r->hasFile('img')) {
      $img_name = $r->file("img")->getClientOriginalName();
      $r->file('img')->storeAs("Cate_img", $img_name, "public");
    }
    $create = $this->user->User()->Category()->create([
      "name" => $r->input("title"),
      "ename" => $r->input('titleEng'),
      "img" => $img_name,
      "text" => $r->input("text"),
      "etext" => $r->input("textEng")
    ]);
    $this->user->User()->Category()->save($create);

    return redirect()->back()->with('success', 'success add');
  }

  public function addroleCate(Request $r)
  {
    RoleCate::create([
      "cate_id" => $r->input('cat__id'),
      "prod_id" => $r->input('prod__id')

    ]);
    return redirect()->back()->with('success', 'success add');
  }
}
