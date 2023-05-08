<?php

namespace App\Services\Admin\Pages\Orders;

use App\Models\Service;
use App\Models\User;

class OrdersService
{
    public static function orders($userId, $status = null)
    {
        $orderWhere = [];

        if (isset($status)) {
            $orderWhere = ['status' => $status];
        }

        $user = User::where('id', $userId)->first();
        $orders = $user->orders()->where($orderWhere)->orderBy('orders.id', 'DESC')->with('service')->paginate(10);

        $services = Service::get();

        return ['orders' => $orders, 'services' => $services];
    }
}
