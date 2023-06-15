<?php

namespace App\Models;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function properties() {
        return $this->hasMany(Properties::class);
    }

    public function review() {
        return $this->belongsTo(Review::class);
    }

    public function business_owner() {
        return $this->hasOne(BusinessOwners::class);
    }


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRedirectRoute()
    {
        // dd($this->hasRole('staff'));
        if($this->hasRole('staff')) {
            return match((int)$this->hasRole('staff')) {
                1 => 'dashboard',
                2 => 'dashboard',
                3 => '/',
                4 => 'dashboard',
                // ...
            };
        }
    }
}
