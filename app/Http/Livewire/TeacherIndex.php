<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;

class TeacherIndex extends Component
{
    use WithPagination;

    public function render()
    {
        $teachers = Teacher::where('status', 1)->latest('id')->paginate(8);
        return view('livewire.teacher-index', compact('teachers'));
    }
}
