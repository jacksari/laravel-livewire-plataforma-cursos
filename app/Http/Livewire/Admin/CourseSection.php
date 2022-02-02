<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use App\Models\Platform;
use App\Models\Section;
use Livewire\Component;

class CourseSection extends Component
{
    public $course;
    public $name;


    protected $listeners = ['renderCourse' => 'courseRender'];

    public function mount(Course $course){
        $this->course = $course;

    }

    public function render()
    {
        return view('livewire.admin.course-section');
    }

    public function courseRender(){
        //dd(Course::find($this->course->id)->sections);
        $this->course = Course::find($this->course->id);
    }

    public function store(){
        $this->validate([
            'name' => 'required'
        ]);
        Section::create([
            'name' => $this->name,
            'course_id' => $this->course->id,
        ]);
        $this->reset('name');
        $this->course = Course::find($this->course->id);
    }
}
