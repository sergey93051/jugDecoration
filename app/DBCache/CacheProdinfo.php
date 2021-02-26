<?php

namespace App\DBCache;

use Illuminate\Support\Facades\Cache;
use App\Productimgs;
use App\Liketot;


class CacheProdinfo
{
  protected $pid;
  protected $dbProductimgs;
  protected $assortment;
  protected $liketotale;

  public function __construct()
  {
    $this->dbProductimgs = Productimgs::select(["*"]);
    $this->assortment = Productimgs::select(["*"]);
    $this->liketotale = Liketot::select(["tottle"]);
  }

  public function CacheProdinfo($id)
  {

    $this->pid = $id;


    return [
      $this->dbProductimgs->where("id", "=", $this->pid)->get(),
      $this->liketotale->where("prod_id", "=", $this->pid)->get(),
      $this->assortment->limit(5)->orderByDesc('productimgs.id')->get()
    ];
    //   if (Cache::has("cache{$id}")) {
    //    return Cache::get("cache{$id}");
    //   }
    //  else{
    //    return Cache::remember("cache{$id}", 172800, function () use($id) {


    //      });
    //   }

  }
}
