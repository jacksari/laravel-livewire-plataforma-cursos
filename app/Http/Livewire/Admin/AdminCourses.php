<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCourses extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $courses = Course::where('title','LIKE','%'.$this->search.'%')->latest('id')->paginate(5);

        return view('livewire.admin.admin-courses', compact('courses'));
    }

    public function limpiarPage(){
        $this->reset('page');
    }
}
