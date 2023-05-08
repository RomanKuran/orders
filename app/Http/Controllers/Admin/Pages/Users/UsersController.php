<?php

namespace App\Http\Controllers\Admin\Pages\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\Api\CurrenciesService;

class UsersController extends Controller
{
    public function users()
    {
        $currencies = CurrenciesService::currencies();
        $users = User::orderBy('id', 'DESC')->paginate(10);

        return view('admin.pages.users.users', compact('users', 'currencies'));
    }
}
