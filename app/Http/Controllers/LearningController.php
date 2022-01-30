<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index(){
        $courses = auth()->user()->courses_enrolled;
        //return $courses;
        return view('learning.index', compact('courses'));
    }
}
