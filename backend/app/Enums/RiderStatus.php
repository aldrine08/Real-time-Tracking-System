<?php

namespace App\Enums;

enum RiderStatus: string
{
    case AVAILABLE = 'Available';

    case ON_DELIVERY = 'On Delivery';

    case OFFLINE = 'Offline';

    case ON_BREAK = 'On Break';
}