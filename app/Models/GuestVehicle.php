<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestVehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'vehicle_photo',
        'check_in_time',
        'check_out_time',
        'status',
    ];

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
}
