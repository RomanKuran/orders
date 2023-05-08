<?php

namespace App\Http\Controllers\Admin\Pages\Users\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Users\CreateUserRequest;
use App\Services\Admin\Pages\Users\Create\CreateService;

class CreateUserController extends Controller
{
    public function create(CreateUserRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $isAdmin = $request->is_admin;

        $user = CreateService::create($name, $email, $isAdmin);

        $userId = $user->id;

        $user = ['userId' => $userId];
        $user = json_encode($user, JSON_UNESCAPED_UNICODE);
        return $user;
    }
}
