<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username', 'email', 'password', 'background_color', 'text_color'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function links()
    {
        return $this->hasMany(Visit::class);
    }

    //see how many visits of specific linke without visits model
    public function visits()
    {
        return $this->hasManyThrough(Visit::class, Link::class);
    }
}
