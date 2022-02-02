<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['can:Ver dashboard'])
    ->get('', [\App\Http\Controllers\Admin\HomeController::class, 'index'])
    ->name('index');

// TODO agregar can al final


Route::resource('roles', \App\Http\Controllers\Admin\RolController::class)->names('roles');

Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names('users');



Route::resource('teachers', \App\Http\Controllers\Admin\TeacherController::class)->names('teachers');

Route::post('teachers/add-teacher/{user}', [\App\Http\Controllers\Admin\TeacherController::class, 'add'])->name('teachers.add');

Route::post('teachers/toggle-status/{teacher}', [\App\Http\Controllers\Admin\TeacherController::class, 'toggleStatus'])->name('teachers.toggle');



Route::resource('courses', \App\Http\Controllers\Admin\CourseController::class)->names('courses');

Route::get('/courses/create/teacher/{teacher}', [\App\Http\Controllers\Admin\CourseController::class,'createForTeacher'])
    ->name('courses.teachers');
