<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasRolesAndPermissions;
    use HasFactory;
  
    use Notifiable;

    

   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'institute',
        'phone',
        'school',
        'profession',
        'gender',
        'age',
        'grade',
        'region',
        'zone',
        'woreda',
        'kebele',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

       public function resources(){
        return $this->hasMany('App\Models\Resource');
    }

    public function grade(){
        return $this->hasMany('App\Models\Grade');
    }

    public function course(){
        return $this->hasMany('App\Models\Course');
    }

    public function unit(){
        return $this->hasMany('App\Models\Unit');
    }

  
    public function subunit(){
        return $this->hasMany('App\Models\Subunit');
    }

    public function media(){
        return $this->hasMany('App\Models\Media');
    }

    public function type(){
        return $this->hasMany('App\Models\Type');
    }
}
