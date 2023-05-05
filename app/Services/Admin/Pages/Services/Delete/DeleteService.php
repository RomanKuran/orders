<?php

namespace App\Services\Admin\Pages\Services\Delete;

use App\Models\Service;

class DeleteService
{
    public static function delete($serviceId)
    {
        $status = Service::where('id', $serviceId)->delete();
        
        return $status;
    }
}
