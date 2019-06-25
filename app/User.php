<?php

namespace App;

use App\Enums\UserType;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Cachable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'image' => 'default.png'
    ];

    public function scopeTeacher($query)
    {
        return $query->where('role_id', UserType::Staff)->get();
    }

    public function scopeStudent($query)
    {
        return $query->where('role_id', UserType::Student)->get();
    }

    public function selectValue()
    {
        return $this->id;
    }
    public function selectText()
    {
        return $this->name;
    }
}
