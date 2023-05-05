<?php

namespace App\Services\Admin\Pages\Users\Delete;

use App\Models\User;

class DeleteService
{
    public static function delete($userId)
    {
        $status = User::where('id', $userId)->delete();
        
        return $status;
    }
}
