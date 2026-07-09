<?php

namespace App\Enums;

enum RiderAvailability: string
{
    case AVAILABLE = 'Available';

    case ON_DELIVERY = 'On Delivery';

    case OFF_DUTY = 'Off Duty';

    case ON_LEAVE = 'On Leave';
}
