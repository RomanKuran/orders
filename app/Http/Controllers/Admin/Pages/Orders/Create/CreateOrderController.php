<?php

namespace App\Http\Controllers\Admin\Pages\Orders\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Orders\CreateOrderRequest;
use App\Services\Admin\Pages\Orders\Create\CreateService;

class CreateOrderController extends Controller
{
    public function create(CreateOrderRequest $request)
    {
        $serviceId = $request->service_id;
        $userId = $request->user_id;

        $order = CreateService::create($serviceId, $userId);

        $orderId = $order->id;

        $order = ['orderId' => $orderId];
        $order = json_encode($order, JSON_UNESCAPED_UNICODE);
        return $order;
    }
}
