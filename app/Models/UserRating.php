<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class UserRating extends Model
{
    //
    protected $table = 'user_ratings';
    protected $fillable = [
        'user_id',
        'product_id',
        'rating',
        'rating_datetime'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


}
