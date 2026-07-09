<?php

namespace App\Enums;

enum AssignmentStatus: string
{
    case ACTIVE = 'Active';

    case COMPLETED = 'Completed';

    case CANCELLED = 'Cancelled';
}
