<?php

namespace App\Enums;

enum PermissionType: string
{
    case CREATE_SHIPMENT = 'Create Shipment';

    case EDIT_SHIPMENT = 'Edit Shipment';

    case DELETE_SHIPMENT = 'Delete Shipment';

    case ASSIGN_RIDER = 'Assign Rider';

    case VIEW_TRACKING = 'View Live Tracking';

    case MANAGE_USERS = 'Manage Users';

    case VIEW_REPORTS = 'View Reports';
}