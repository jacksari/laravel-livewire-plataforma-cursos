<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class InstructorCourses extends Component
{
    // TODO agregar layout para instructores
    public function render()
    {
        $courses = Course::all()->where('teacher_id',auth()->user()->id);
        return view('livewire.instructor-courses', compact('courses'));
    }
}
