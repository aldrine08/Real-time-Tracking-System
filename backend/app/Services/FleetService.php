<?php

namespace App\Services;

use App\Enums\AssignmentStatus;
use App\Enums\RiderAvailability;
use App\Enums\VehicleStatus;
use App\Models\Rider;
use App\Models\Vehicle;
use App\Models\VehicleAssignment;

class FleetService
{
    /**
     * Return all dashboard statistics.
     */
    public function dashboardData(): array
    {
        $totalVehicles = Vehicle::count();

        $availableVehicles = Vehicle::where(
            'status',
            VehicleStatus::AVAILABLE->value
        )->count();

        $assignedVehicles = Vehicle::where(
            'status',
            VehicleStatus::ASSIGNED->value
        )->count();

        $inTransitVehicles = Vehicle::where(
            'status',
            VehicleStatus::IN_TRANSIT->value
        )->count();

        $maintenanceVehicles = Vehicle::where(
            'status',
            VehicleStatus::MAINTENANCE->value
        )->count();

        // $totalRiders = Rider::count();

        // $availableRiders = Rider::where(
        //     'availability',
        //     RiderAvailability::AVAILABLE->value
        // )->count();

        // $activeAssignments = VehicleAssignment::where(
        //     'status',
        //     AssignmentStatus::ACTIVE->value
        // )->count();

        // $fleetUtilization = $totalVehicles > 0
        //     ? round(($activeAssignments / $totalVehicles) * 100, 1)
        //     : 0;

        return [

            'totalVehicles' => $totalVehicles,

            'availableVehicles' => $availableVehicles,

            'assignedVehicles' => $assignedVehicles,

            'inTransitVehicles' => $inTransitVehicles,

            'maintenanceVehicles' => $maintenanceVehicles,

            // 'totalRiders' => $totalRiders,

            // 'availableRiders' => $availableRiders,

            // 'activeAssignments' => $activeAssignments,

            // 'fleetUtilization' => $fleetUtilization,

        ];
    }
}