<?php

use Illuminate\Support\Facades\Route;

Route::get('/users',  [App\Http\Controllers\Admin\Pages\Users\UsersController::class, 'users'])->name('admin.users');
Route::put('/users/edit',  [App\Http\Controllers\Admin\Pages\Users\Edit\EditUserController::class, 'edit'])->name('admin.editUser');
Route::delete('/users/delete',  [App\Http\Controllers\Admin\Pages\Users\Delete\DeleteUserController::class, 'delete'])->name('admin.deleteUser');
Route::post('/users/create',  [App\Http\Controllers\Admin\Pages\Users\Create\CreateUserController::class, 'create'])->name('admin.createUser');

Route::get('/services',  [App\Http\Controllers\Admin\Pages\Services\ServicesController::class, 'services'])->name('admin.services');
Route::put('/services/edit',  [App\Http\Controllers\Admin\Pages\Services\Edit\EditServiceController::class, 'edit'])->name('admin.editService');
Route::delete('/services/delete',  [App\Http\Controllers\Admin\Pages\Services\Delete\DeleteServiceController::class, 'delete'])->name('admin.deleteService');
Route::post('/services/create',  [App\Http\Controllers\Admin\Pages\Services\Create\CreateServiceController::class, 'create'])->name('admin.createService');

Route::get('/orders/{userId}/{status?}',  [App\Http\Controllers\Admin\Pages\Orders\OrdersController::class, 'orders'])->name('admin.orders');
Route::put('/orders/edit',  [App\Http\Controllers\Admin\Pages\Orders\Edit\EditOrderController::class, 'edit'])->name('admin.editOrder');
Route::delete('/orders/delete',  [App\Http\Controllers\Admin\Pages\Orders\Delete\DeleteOrderController::class, 'delete'])->name('admin.deleteOrder');
