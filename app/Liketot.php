<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liketot extends Model
{
    protected $table = "liketot";
    protected $fillable = ["tottle", "prod_id"];
    public $timestamps = false;
}
