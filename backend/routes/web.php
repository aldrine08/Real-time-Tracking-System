<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Merchant\DashboardController;

use App\Http\Controllers\DashboardRedirectController;

use App\Http\Controllers\Merchant\FleetDashboardController;



Route::get('/', function () {
    return view('welcome');
});



// Route::get('/dashboard', DashboardRedirectController::class)
//     ->middleware(['auth'])
//     ->name('dashboard');

    Route::middleware(['auth'])
    ->prefix('merchant')
    ->name('merchant.')
    ->group(function () {

        Route::get(
            '/dashboard',
            [FleetDashboardController::class, 'index']
        )->name('dashboard');

    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {

    

        
});

require __DIR__.'/auth.php';
