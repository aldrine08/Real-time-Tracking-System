<?php

namespace App\Enums;

enum SubscriptionPlan: string
{
    case FREE = 'Free';

    case STARTER = 'Starter';

    case BUSINESS = 'Business';

    case ENTERPRISE = 'Enterprise';
}