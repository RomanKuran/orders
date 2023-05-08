<?php

namespace App\Http\Controllers\Admin\Pages\Orders\Delete;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Orders\DeleteOrderRequest;
use App\Services\Admin\Pages\Orders\Delete\DeleteService;

class DeleteOrderController extends Controller
{
    public function delete(DeleteOrderRequest $request)
    {
        $orderId = $request->order_id;

        $status = DeleteService::delete($orderId);

        $deleteStatus = ['deleteStatus' => $status];
        $deleteStatus = json_encode($deleteStatus, JSON_UNESCAPED_UNICODE);
        return $deleteStatus;
    }
}
