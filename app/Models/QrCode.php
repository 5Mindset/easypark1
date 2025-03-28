<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrCode extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'vehicle_id',
        'code',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function setCodeAttribute($value)
    {
        if (!$this->exists) { 
            $this->attributes['code'] = $value;
        }
    }
}
