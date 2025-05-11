<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'vehicle_id',
        'destination',
        'start_time',
        'estimated_arrival',
        'actual_arrival',
        'goods_type',
        'status',
    ];

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}
