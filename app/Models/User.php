<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'enabled',
        'establishment_id',
        'api_token',
        'user_name',
        'ref_code',
        'lastname',
        'imagen',
        'registration_date',
        'phone_verification',
        'terms','privacy_notice'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'password' => 'required',
        'email' => 'required|email',
        'user_name' => 'required|unique:users',
        'phone' => 'required|unique:users',
    ];
    public static $updaterules = [
        'name' => 'required',
        'email' => 'required|email',
        'user_name' => 'required|unique:users',
        'phone' => 'required|unique:users',
    ];
}
