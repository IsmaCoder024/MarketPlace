<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'user_rating',
        'time_passed',
        'active_time',
    ];

    public function ratings()
    {
        return $this->belongsTo(UserRating::class);
    }
}

