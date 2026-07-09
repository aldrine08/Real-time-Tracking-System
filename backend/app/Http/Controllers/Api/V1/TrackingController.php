<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreLocationRequest;
use App\Http\Resources\GPSLocationResource;
use App\Services\TrackingService;

class TrackingController extends Controller
{
    public function __construct(
        protected TrackingService $trackingService
    ) {}

    public function store(StoreLocationRequest $request)
    {
        $location = $this->trackingService->updateLocation(
            $request->validated()
        );

        return response()->json([

            'success' => true,

            'message' => 'Location updated successfully.',

            'data' => new GPSLocationResource($location),

        ]);
    }
}