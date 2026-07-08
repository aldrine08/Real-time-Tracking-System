<?php

namespace App\Enums;

enum ShipmentStatus: string
{
    case PENDING = 'Pending';

    case ASSIGNED = 'Assigned';

    case PICKED_UP = 'Picked Up';

    case IN_TRANSIT = 'In Transit';

    case DELIVERED = 'Delivered';

    case FAILED = 'Failed';

    case CANCELLED = 'Cancelled';
}