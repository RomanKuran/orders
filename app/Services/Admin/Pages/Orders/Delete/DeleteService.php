<?php

namespace App\Services\Admin\Pages\Orders\Delete;

use App\Models\Order;

class DeleteService
{
    public static function delete($orderId)
    {
        $status = Order::where('id', $orderId)->delete();
        
        return $status;
    }
}
