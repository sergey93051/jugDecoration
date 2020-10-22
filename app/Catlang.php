<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catlang extends Model
{
    protected $table = "catenlang";
    protected $fillable = ['name', "eng"];
}
