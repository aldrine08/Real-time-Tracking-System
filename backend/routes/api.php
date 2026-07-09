<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TrackingController;

Route::prefix('v1')->group(function () {

    Route::post('/tracking/location', [TrackingController::class, 'store']);

});