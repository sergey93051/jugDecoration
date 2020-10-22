<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $guard = 'newuser';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', "nameS", "phone", "street", "country", "city", "password",
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function admins()
    {
        return $this->belongsToMany('App\Admins', "roles", "user_id", "admin_id");
    }
    public function Productimgs()
    {
        return $this->hasMany("App\Productimgs", "user_id", "id");
    }
    public function Category()
    {
        return $this->hasMany("App\Category", "user_id", "id");
    }
    public function Orders()
    {
        return $this->hasMany("App\Orders", "user_id", "id");
    }
    public function Like()
    {
        return $this->hasMany("App\Like", "user_id", "id");
    }
    public function Helpmess()
    {
        return $this->hasMany("App\Helpmess", "user_id", "id");
    }


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
