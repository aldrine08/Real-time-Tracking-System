<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\RoleType;

class DashboardRedirectController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = $request->user();

        if (!$user || !$user->role) {
            abort(403);
        }

        return match ($user->role->name) {

            RoleType::SUPER_ADMIN->value =>
                redirect()->route('super-admin.dashboard'),

            RoleType::MERCHANT_ADMIN->value =>
                redirect()->route('merchant.dashboard'),

            RoleType::DISPATCHER->value =>
                redirect()->route('dispatcher.dashboard'),

            RoleType::RIDER->value =>
                redirect()->route('rider.dashboard'),

            RoleType::WAREHOUSE_STAFF->value =>
                redirect()->route('warehouse.dashboard'),

            RoleType::CUSTOMER_SUPPORT->value =>
                redirect()->route('support.dashboard'),

            default => abort(403),
        };
    }
}