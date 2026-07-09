<?php

namespace App\Enums;

enum VehicleType: string
{
    case MOTORCYCLE = 'Motorcycle';
    case VAN = 'Van';
    case PICKUP = 'Pickup';
    case TRUCK = 'Truck';
    case BICYCLE = 'Bicycle';
}