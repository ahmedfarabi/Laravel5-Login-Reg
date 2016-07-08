<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
    
    public static $login_validation_rules = [
      'email' => 'required|email|exists:users',
      'password' => 'required'
    ];

    public static $create_validation_rules = [
      'name' => 'required|unique:users',
      'email' => 'required|email|unique:users',
      'password' => 'required'
    ];
}
