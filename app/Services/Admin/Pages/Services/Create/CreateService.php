<?php

namespace App\Services\Admin\Pages\Services\Create;

use App\Models\Service;

class CreateService
{
    public static function create($name, $price)
    {
        $service = Service::createService($name, $price);

        return $service;
    }
}
