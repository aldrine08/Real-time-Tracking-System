<?php

namespace App\Enums;

enum RoleType: string
{
    case SUPER_ADMIN = 'Super Admin';

    case MERCHANT_ADMIN = 'Merchant Admin';

    case DISPATCHER = 'Dispatcher';

    case RIDER = 'Rider';

    case WAREHOUSE_STAFF = 'Warehouse Staff';

    case CUSTOMER_SUPPORT = 'Customer Support';
}