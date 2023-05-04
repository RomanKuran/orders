<?php

use Illuminate\Support\Facades\Route;

Route::get('/users',  [App\Http\Controllers\Admin\Pages\Users\UsersController::class, 'users'])->name('admin.users');
Route::put('/users/edit',  [App\Http\Controllers\Admin\Pages\Users\Edit\EditUserController::class, 'edit'])->name('admin.editUser');
