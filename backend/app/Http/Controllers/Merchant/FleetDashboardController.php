<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Services\FleetService;

class FleetDashboardController extends Controller
{
    public function __construct(
        protected FleetService $fleetService
    ) {}

    public function index()
    {
        return view(
            'merchant.dashboard',
            $this->fleetService->dashboardData()
        );
    }
}