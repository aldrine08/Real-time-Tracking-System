<?php

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE = 'Active';

    case INACTIVE = 'Inactive';

    case SUSPENDED = 'Suspended';

    case PENDING = 'Pending';
}