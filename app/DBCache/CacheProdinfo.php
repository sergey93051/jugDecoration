<?php
 namespace App\DBCache;

 use Illuminate\Support\Facades\Cache;
 use App\Productimgs;
 
 
class CacheProdinfo{

  public function CacheProdinfo($id){
       $dbProductimgs = Productimgs::select(["*"])->where("id","=",$id)->get();
       Cache::put("cache{$id}",$dbProductimgs,172800);


       return $dbProductimgs;
     }
 
}