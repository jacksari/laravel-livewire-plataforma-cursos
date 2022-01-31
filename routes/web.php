<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/cursos', [\App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');

Route::get('/cursos/{course}', [\App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');

Route::post('/courses/{course}/enrolled', [\App\Http\Controllers\CourseController::class, 'enrolled'])
    ->middleware('auth')
    ->name('courses.enrolled');

Route::get('/learning/{course}', \App\Http\Livewire\CourseLearning::class)->middleware('auth')->name('courses.learning');

Route::get('/contacto', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');


Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blogs.index');


Route::get('/profesores', [\App\Http\Controllers\TeacherController::class, 'index'])->name('teachers.index');

Route::get('/profesores/{teacher}', [\App\Http\Controllers\TeacherController::class, 'show'])->name('teachers.show');


Route::get('/learning', [\App\Http\Controllers\LearningController::class, 'index'])->middleware('auth')->name('learning.index');
