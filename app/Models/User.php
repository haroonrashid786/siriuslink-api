<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */



    protected $casts = [
        'full_name' => 'string',
        'email' => 'string',
        'mobile_number' => 'integer',
        'verification_code' => 'integer',
        'verify_time_date' => 'datetime',
        'active' => 'boolean',
        'profile_picture' => 'string',
        'login_with' => 'string',
        "industry" => 'string',
        'details' => 'string',
        'email_verification_code'  => 'integer'
    ];
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'mobile_number',
        'verification_code',
        'verify_time_date',
        'active',
        'profile_picture',
        'login_with',
        "industry",
        'details',
        'email_verification_code'
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */



    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
    }

    public function services()
    {
        return $this->hasMany(UserService::class, 'user_id',   'id');
    }

    public function attachments()
    {
        return $this->hasMany(UserAttachments::class, 'user_id', 'id');
    }

    public function expertise()
    {
        return $this->hasOne(UserExpertise::class, 'user_id', 'id');
    }


    public function accountType()
    {
        return $this->hasMany(UserAccountType::class, 'user_id', 'id');
    }
    public function location()
    {
        return $this->hasOne(UserLocation::class, 'user_id', 'id');
    }
    public function isAdmin()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'Admin') {
                return true;
            }
        }
        return false;
    }
}
