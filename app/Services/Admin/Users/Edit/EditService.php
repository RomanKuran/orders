<?php

namespace App\Services\Admin\Users\Edit;

use App\Models\User;

class EditService
{
    public static function edit($userId, $fieldName, $value)
    {
        $status = User::edit($userId, $fieldName, $value);
        
        return $status;
    }
}
