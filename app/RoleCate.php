<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleCate extends Model
{
    protected $table = "rolecats";
    protected $fillable = [
        'cate_id', 'prod_id',
    ];
}
