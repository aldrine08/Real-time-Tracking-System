<?php

namespace App\Enums;

enum VehicleStatus: string
{
    case AVAILABLE = 'Available';

    case ASSIGNED = 'Assigned';

    case IN_TRANSIT = 'In Transit';

    case MAINTENANCE = 'Maintenance';

    case RETIRED = 'Retired';
}