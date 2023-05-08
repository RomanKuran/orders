<?php

namespace App\Http\Controllers\Admin\Pages\Services\Edit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Services\EditServiceRequest;
use App\Services\Admin\Pages\Services\Edit\EditService;

class EditServiceController extends Controller
{
    public function edit(EditServiceRequest $request)
    {
        $serviceId = $request->service_id;
        $fieldName = $request->field_name;
        $value = $request->value;

        $status = EditService::edit($serviceId, $fieldName, $value);

        $editStatus = ['editStatus' => $status];
        $editStatus = json_encode($editStatus, JSON_UNESCAPED_UNICODE);
        return $editStatus;
    }
}
