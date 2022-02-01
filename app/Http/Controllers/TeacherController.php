<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends Controller
{

    public function index(){
        //return $teachers = Teacher::paginate(8);
        return view('teachers.index');

    }

    public function show(Teacher $teacher){
        $this->authorize('published', $teacher);
        return view('teachers.show', compact('teacher'));
    }
}
