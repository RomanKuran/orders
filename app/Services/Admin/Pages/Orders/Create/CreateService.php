<?php

namespace App\Services\Admin\Pages\Orders\Create;

use App\Models\Order;

class CreateService
{
    public static function create($serviceId, $userId)
    {
        $order = Order::createOrder('created', $userId, $serviceId);

        return $order;
    }
}
