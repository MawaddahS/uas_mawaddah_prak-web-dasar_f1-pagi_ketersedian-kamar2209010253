<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomlevel extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'level',
    ];

    public function rooma()
    {
        return $this->hasMany(Room::class);
    }
}
