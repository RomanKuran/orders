<?php

namespace App\Http\Controllers\Admin\Pages\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\Admin\Api\CurrenciesService;

class ServicesController extends Controller
{
    public function services()
    {
        $currencies = CurrenciesService::currencies();
        $services = Service::orderBy('id', 'DESC')->paginate(10);
        
        return view('admin.pages.services.services', compact('services', 'currencies'));
    }
}
