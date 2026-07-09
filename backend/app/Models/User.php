<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;


class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    public function getFullNameAttribute(): string
{
    return "{$this->first_name} {$this->last_name}";
}

    protected $fillable = [

    'uuid',

    'company_id',

    'role_id',

    'first_name',

    'last_name',

    'email',

    'phone',

    'profile_photo',

    'password',

    'status',

    'last_login_at'

];

protected $hidden = [
    'password',
    'remember_token',
];

protected static function booted()
{
    static::creating(function ($user) {

        if (empty($user->uuid)) {
            $user->uuid = Str::uuid();
        }

    });
}

public function company()
{
    return $this->belongsTo(Company::class);
}

public function role()
{
    return $this->belongsTo(Role::class);
}

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
{
    return [

        'email_verified_at' => 'datetime',

        'password' => 'hashed',

        'last_login_at' => 'datetime',

    ];
}
}
