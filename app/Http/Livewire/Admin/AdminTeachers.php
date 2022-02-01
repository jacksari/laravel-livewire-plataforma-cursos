<?php

namespace App\Http\Livewire\Admin;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTeachers extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {


        $teachers = Teacher::latest('id')->paginate(5);
        return view('livewire.admin.admin-teachers', compact('teachers'));
    }
}
