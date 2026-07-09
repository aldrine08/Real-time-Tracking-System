<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GPSLocationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,

            'rider_id' => $this->rider_id,

            'vehicle_id' => $this->vehicle_id,

            'shipment_id' => $this->shipment_id,

            'latitude' => $this->latitude,

            'longitude' => $this->longitude,

            'speed' => $this->speed,

            'heading' => $this->heading,

            'accuracy' => $this->accuracy,

            'recorded_at' => $this->recorded_at,

            'updated_at' => $this->updated_at,

        ];
    }
}