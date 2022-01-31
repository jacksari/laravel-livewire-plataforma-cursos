<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['can:Ver dashboard'])
    ->get('', [\App\Http\Controllers\Admin\HomeController::class, 'index'])
    ->name('index');



Route::resource('roles', \App\Http\Controllers\Admin\RolController::class)->names('roles');

Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names('users');
