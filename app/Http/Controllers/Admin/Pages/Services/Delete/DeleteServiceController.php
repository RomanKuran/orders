<?php

namespace App\Http\Controllers\Admin\Pages\Services\Delete;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Services\DeleteServiceRequest;
use App\Services\Admin\Pages\Services\Delete\DeleteService;

class DeleteServiceController extends Controller
{
    public function delete(DeleteServiceRequest $request)
    {
        $serviceId = $request->service_id;

        $status = DeleteService::delete($serviceId);

        $deleteStatus = ['deleteStatus' => $status];
        $deleteStatus = json_encode($deleteStatus, JSON_UNESCAPED_UNICODE);
        return $deleteStatus;
    }
}
