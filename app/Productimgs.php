<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productimgs extends Model{
    protected $table="productimgs";
    protected $fillable = [
     'img',"title","after","text","price"  
    ];
}
