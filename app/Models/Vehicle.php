<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'plate_number',
        'brand_id',
        'model_id',
        'type_id',
        'color_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(VehicleBrand::class);
    }

    public function model()
    {
        return $this->belongsTo(VehicleModel::class);
    }

    public function type()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function color()
    {
        return $this->belongsTo(VehicleColor::class);
    }

    public function qrCode()
    {
        return $this->hasOne(QrCode::class);
    }
}
