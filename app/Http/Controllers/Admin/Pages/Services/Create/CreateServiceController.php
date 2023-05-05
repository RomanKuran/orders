<?php

namespace App\Http\Controllers\Admin\Pages\Services\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\Services\CreateServiceRequest;
use App\Services\Admin\Pages\Services\Create\CreateService;

class CreateServiceController extends Controller
{
    public function create(CreateServiceRequest $request)
    {
        $name = $request->name;
        $price = $request->price;

        $service = CreateService::create($name, $price);

        $serviceId = $service->id;

        $service = ['serviceId' => $serviceId];
        $service = json_encode($service, JSON_UNESCAPED_UNICODE);
        return $service;
    }
}
