<?php

namespace App\Http\Controllers\Admin\Pages\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\Admin\Api\CurrenciesService;
use App\Services\Admin\Pages\Orders\OrdersService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class OrdersController extends Controller
{
    protected function validator(array $data)
    {
        $statuses = Order::$statuses;

        return Validator::make($data, [
            'user_id' => ['required', 'exists:users,id'],
            'status' => ['nullable', Rule::in($statuses)]
        ]);
    }

    public function orders($userId, $status = null)
    {
        $currencies = CurrenciesService::currencies();
        $orders = OrdersService::orders($userId, $status);
        $statuses = Order::$statuses;

        $services = $orders['services'];
        $orders = $orders['orders'];

        return view('admin.pages.orders.orders', compact('orders', 'statuses', 'services', 'userId', 'currencies'));
    }
}
