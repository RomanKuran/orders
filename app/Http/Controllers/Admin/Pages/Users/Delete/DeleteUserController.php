<?php

namespace App\Http\Controllers\Admin\Pages\Users\Delete;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Users\DeleteUserRequest;
use App\Services\Admin\Users\Delete\DeleteService;

class DeleteUserController extends Controller
{
    public function delete(DeleteUserRequest $request)
    {
        $userId = $request->user_id;

        $status = DeleteService::delete($userId);

        $deleteStatus = ['deleteStatus' => $status];
        $deleteStatus = json_encode($deleteStatus, JSON_UNESCAPED_UNICODE);
        return $deleteStatus;
    }
}
