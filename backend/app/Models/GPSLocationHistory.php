<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GPSLocationHistory extends Model
{
    use HasFactory;

    protected $table = 'gps_location_history';

    protected $fillable = [

        'rider_id',

        'vehicle_id',

        'shipment_id',

        'latitude',

        'longitude',

        'speed',

        'heading',

        'accuracy',

        'recorded_at',

    ];

    protected function casts(): array
    {
        return [

            'latitude' => 'float',

            'longitude' => 'float',

            'speed' => 'float',

            'heading' => 'float',

            'accuracy' => 'float',

            'recorded_at' => 'datetime',

        ];
    }

    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}