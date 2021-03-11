<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'nama_rayon'
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

    public function pikets()
    {
        return $this->hasMany(Piket::class);
    }

    public function kumpuls()
    {
        return $this->hasMany(Kumpul::class);
    }

    public function absenpikets()
    {
        return $this->hasMany(Piket::class);
    }

    public function absenkehadirans()
    {
        return $this->hasMany(Piket::class);
    }
}
