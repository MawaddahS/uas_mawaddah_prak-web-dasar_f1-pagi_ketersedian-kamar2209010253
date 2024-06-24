<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roombooking extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'room_id',
        'patient_id',
        'admission_date',
        'discharge_date',
    ];

    public function rooma()
    {
        return $this->hasMany(Room::class);
    }
}