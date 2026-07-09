<?php

namespace App\Services;

use App\Models\GPSLocation;
use App\Models\GPSLocationHistory;

class TrackingService
{
    /**
     * Process a rider GPS update.
     */
    public function updateLocation(array $data): GPSLocation
    {
        // Update or create the rider's latest location
        $location = GPSLocation::updateOrCreate(
            [
                'rider_id' => $data['rider_id'],
            ],
            [
                'vehicle_id'   => $data['vehicle_id'] ?? null,
                'shipment_id'  => $data['shipment_id'] ?? null,
                'latitude'     => $data['latitude'],
                'longitude'    => $data['longitude'],
                'speed'        => $data['speed'] ?? 0,
                'heading'      => $data['heading'] ?? null,
                'accuracy'     => $data['accuracy'] ?? null,
                'recorded_at'  => $data['recorded_at'],
            ]
        );

        // Store a permanent history record
        GPSLocationHistory::create([
            'rider_id'     => $data['rider_id'],
            'vehicle_id'   => $data['vehicle_id'] ?? null,
            'shipment_id'  => $data['shipment_id'] ?? null,
            'latitude'     => $data['latitude'],
            'longitude'    => $data['longitude'],
            'speed'        => $data['speed'] ?? 0,
            'heading'      => $data['heading'] ?? null,
            'accuracy'     => $data['accuracy'] ?? null,
            'recorded_at'  => $data['recorded_at'],
        ]);

        return $location;
    }
}