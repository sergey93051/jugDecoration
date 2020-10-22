<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helpmess extends Model
{
    protected $table = "Helpmess";
    protected $fillable = ['data', "description"];
}
