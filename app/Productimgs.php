<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productimgs extends Model
{
    protected $table = "productimgs";
    protected $fillable = [
        "directory", 'img', "img_2", "img_3", "title", "etitle", "text", "etext", "price"
    ];
}
