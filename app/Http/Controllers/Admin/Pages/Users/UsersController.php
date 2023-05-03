<?php

namespace App\Http\Controllers\Admin\Pages\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        
        return view('admin.pages.users.users', compact('users'));
    }
}
