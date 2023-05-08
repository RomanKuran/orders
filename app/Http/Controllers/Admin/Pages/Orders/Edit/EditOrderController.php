<?php

namespace App\Http\Controllers\Admin\Pages\Orders\Edit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Orders\EditOrderRequest;
use App\Services\Admin\Pages\Orders\Edit\EditService;

class EditOrderController extends Controller
{
    public function edit(EditOrderRequest $request){
        $orderId = $request->order_id;
        $fieldName = $request->field_name;
        $value = $request->value;

        $status = EditService::edit($orderId, $fieldName, $value);

        $editStatus = ['editStatus' => $status];
        $editStatus = json_encode($editStatus, JSON_UNESCAPED_UNICODE);
        return $editStatus;
    }
}
