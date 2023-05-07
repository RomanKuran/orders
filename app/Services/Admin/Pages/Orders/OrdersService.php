<?php

namespace App\Services\Admin\Pages\Orders;

use App\Models\User;

class OrdersService
{
    public static function orders($userId)
    {
        $user = User::where('id', $userId)->first();

        $orders = $user->services()->orderBy('id', 'DESC')->with(['order' => function ($q) use ($user) {
            $q->where('orders.user_id', $user->id);
        }])->paginate(10);

        return $orders;
    }
}
