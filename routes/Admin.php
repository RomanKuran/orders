<?php

use Illuminate\Support\Facades\Route;

Route::get('/users',  [App\Http\Controllers\Admin\Pages\Users\UsersController::class, 'users'])->name('admin.users');
