<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'users';

    protected $fillable = [ 'name', 'email', 'password', 'om_id' , 'usuario'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [ 'email_verified_at' => 'datetime'];
}