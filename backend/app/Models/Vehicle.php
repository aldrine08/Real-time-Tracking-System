<?php

namespace App\Models;

use App\Enums\VehicleStatus;
use App\Enums\VehicleType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [

        'uuid',

        'company_id',

        'registration_number',

        'fleet_number',

        'type',

        'brand',

        'model',

        'color',

        'manufacture_year',

        'capacity_kg',

        'fuel_type',

        'status',

        'current_odometer',

        'insurance_expiry',

        'inspection_expiry',

        'notes',

    ];

    protected $casts = [

        'type' => VehicleType::class,

        'status' => VehicleStatus::class,

        'insurance_expiry' => 'date',

        'inspection_expiry' => 'date',

    ];

    protected static function booted()
    {
        static::creating(function ($vehicle) {

            if (empty($vehicle->uuid)) {

                $vehicle->uuid = Str::uuid();

            }

        });
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}