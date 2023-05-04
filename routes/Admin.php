<?php

use Illuminate\Support\Facades\Route;

Route::get('/users',  [App\Http\Controllers\Admin\Pages\Users\UsersController::class, 'users'])->name('admin.users');
Route::put('/users/edit',  [App\Http\Controllers\Admin\Pages\Users\Edit\EditUserController::class, 'edit'])->name('admin.editUser');
Route::delete('/users/delete',  [App\Http\Controllers\Admin\Pages\Users\Delete\DeleteUserController::class, 'delete'])->name('admin.deleteUser');
Route::post('/users/create',  [App\Http\Controllers\Admin\Pages\Users\Create\CreateUserController::class, 'create'])->name('admin.createUser');