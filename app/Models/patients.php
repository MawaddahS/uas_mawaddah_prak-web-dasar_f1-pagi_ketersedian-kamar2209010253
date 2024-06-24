<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{

    use HasFactory; 
    
    protected $fillable = [
        'name',
        'admission_date',
        'discharge_date',
    ];

    public function bookings()
    {
        return $this->hasMany(Roombooking::class);
    }
}