<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Category;

class User extends Authenticatable
{
    use Notifiable;

const ROLE_ADMIN = 1;
const ROLE_USER = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    /**
     * Undocumented function
     *
     * @return void
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Check is admin
     */
    public function isAdmin()
    {
        return $this->role === User::ROLE_ADMIN;
    }

}
