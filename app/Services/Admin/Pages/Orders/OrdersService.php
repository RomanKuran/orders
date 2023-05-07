<?php

namespace App\Services\Admin\Pages\Orders;

use App\Models\User;

class OrdersService
{
    public static function orders($userId)
    {
        $user = User::where('id', $userId)->first();
        $orders = $user->services()->with('order')->paginate(10);

        return $orders;
    }
}
