<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = "like";
    protected $fillable = ['like', "prod_id", "tottle"];
    public $timestamps = false;
}
