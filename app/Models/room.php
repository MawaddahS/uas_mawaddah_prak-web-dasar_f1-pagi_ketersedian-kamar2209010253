<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'level',
        'is_available'
    ];

    public function room_levels()
    {
        return $this->belongsTo(Roomlevel::class);
      }

      public function bookings()
      {
        return $this->hasMany(Roombooking::class);
      }
}