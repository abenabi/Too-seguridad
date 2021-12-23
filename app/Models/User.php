<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Notifications\CambiarPassword;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol_id',
        'estado_id',
        'google2fa_secret',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'google2fa_secret',
    ];

    /*
    public function setGoogle2faSecretAttribute($value)
    {
         $this->attributes['google2fa_secret'] = encrypt($value);
    }
    */

    /***
     * Decrypt the user's google_2fa secret.
     *
     * @param  string  $value
     * @return string
     */

    /*
    public function getGoogle2faSecretAttribute($value)
    {
        return decrypt($value);
    }
    */

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function roles()
    {
        return $this->hasOne('App\Models\Role', 'id', 'rol_id');
    }

    public function estados()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CambiarPassword($token));
    }
}
