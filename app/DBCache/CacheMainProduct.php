<?php
 namespace App\DBCache;

 use Illuminate\Support\Facades\Cache;
 use App\Category;
 
 
class CacheMainProduct{

  public function CacheMainProduct(){
  
  
      if (Cache::has("mainProduct")) {
       return Cache::get("mainProduct");
      }
      else{
        return Cache::remember("mainProduct", 172800, function () {
          return Category::select(["*"])->get(); 
        });
      }



      
      
     }
 
}