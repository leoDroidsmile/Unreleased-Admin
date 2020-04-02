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
    protected $table = 'Users';

    protected $fillable = [
        'name', 'email', 'password', 'role', 'allowed', 'gender', 'birthday', 'phone', 'profile_image', 'is_social'
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

    
    public function artisancategory()
    {
        return $this->hasMany('App\Models\ArtisanCategory');
    }

    public function cart()
    {
        return $this->hasMany('App\Models\Cart');
    }

    // public function userrole()
    // {
    //     return $this->belongsTo('App\Models\UserRole', 'role');
    // }
}
