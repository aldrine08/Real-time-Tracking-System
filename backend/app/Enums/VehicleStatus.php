<?php

namespace App\Enums;

enum VehicleStatus: string
{
    case AVAILABLE = 'Available';

    case IN_USE = 'In Use';

    case MAINTENANCE = 'Maintenance';

    case OUT_OF_SERVICE = 'Out of Service';
}