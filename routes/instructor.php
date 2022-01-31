<?php

use Illuminate\Support\Facades\Route;

Route::redirect('','instructor/courses');

Route::get('courses', \App\Http\Livewire\InstructorCourses::class)->name('courses.index');

