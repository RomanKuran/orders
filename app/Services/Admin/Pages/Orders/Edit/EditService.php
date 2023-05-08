<?php

namespace App\Services\Admin\Pages\Orders\Edit;

use App\Models\Order;

class EditService
{
    public static function edit($orderId, $fieldName, $value)
    {
        $status = Order::edit($orderId, $fieldName, $value);

        return $status;
    }
}
