<?php

namespace App\Http\Controllers\Admin\Pages\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServicesController extends Controller
{
    public function services()
    {
        $services = Service::orderBy('id', 'DESC')->paginate(10);
        
        return view('admin.pages.services.services', compact('services'));
    }
}
