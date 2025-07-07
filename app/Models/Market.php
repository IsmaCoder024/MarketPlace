<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Market extends Model
{
     //

     use HasFactory, Notifiable;

     protected $table = 'markets';
 
     /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     
     protected $fillable = [
             'title',
             'image_path',
             'description',
             'price',
             'seen',
             'user_id',
     ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
