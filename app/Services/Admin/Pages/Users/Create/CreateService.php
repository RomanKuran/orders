<?php

namespace App\Services\Admin\Pages\Users\Create;

use App\Models\User;
use Illuminate\Support\Str;

class CreateService
{
    public static function create($name, $email, $isAdmin)
    {
        $password = Str::random(10);
        $dataNewUser = ['name' => $name, 'email' => $email, 'password' => $password, 'is_admin' => $isAdmin];
        $user = User::createUser($dataNewUser);

        return $user;
    }
}
