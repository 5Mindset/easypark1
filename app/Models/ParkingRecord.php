<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'qr_code_id',
        'check_in_time',
        'check_out_time',
        'status',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function qrCode()
    {
        return $this->belongsTo(QrCode::class);
    }
}
