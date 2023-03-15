<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;



class User extends Authenticatable
{
    use Notifiable, LaratrustUserTrait;


    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    // ...

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::created(function ($user) {
            $user->roles()->sync(Role::where('name', 'user')->firstOrFail());
        });
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
        
    }
}
