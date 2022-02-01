<?php

namespace App\Http\Livewire\Admin;

use App\Models\Teacher;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTeachers extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $users = User::where('name','LIKE','%'.$this->search.'%')->where('teacher_user',1)->latest('id')->paginate(5);

        return view('livewire.admin.admin-teachers', compact('users'));
    }

    public function limpiarPage(){
        $this->reset('page');
    }
}
