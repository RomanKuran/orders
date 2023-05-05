<?php

namespace App\Services\Admin\Pages\Services\Edit;

use App\Models\Service;

class EditService
{
    public static function edit($serviceId, $fieldName, $value)
    {
        $status = Service::edit($serviceId, $fieldName, $value);
        
        return $status;
    }
}
