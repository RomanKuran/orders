<?php

namespace App\Http\Controllers\Admin\Pages\Users\Edit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Users\EditUserRequest;
use App\Services\Admin\Users\Edit\EditService;

class EditUserController extends Controller
{
    public function edit(EditUserRequest $request)
    {
        $userId = $request->user_id;
        $fieldName = $request->field_name;
        $value = $request->value;

        $status = EditService::edit($userId, $fieldName, $value);

        $editStatus = ['editStatus' => $status];
        $editStatus = json_encode($editStatus, JSON_UNESCAPED_UNICODE);
        return $editStatus;
    }
}
