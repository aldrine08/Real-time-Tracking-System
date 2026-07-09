<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    /** @use HasFactory<\Database\Factories\ShipmentFactory> */
    use HasFactory;

    public function gpsLocations()
{
    return $this->hasMany(GPSLocation::class);
}

public function gpsHistory()
{
    return $this->hasMany(GPSLocationHistory::class);
}

}
