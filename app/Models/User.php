<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'

    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function ratings()
    {
        return $this->hasMany(UserRating::class, 'user_id');

    }
}
