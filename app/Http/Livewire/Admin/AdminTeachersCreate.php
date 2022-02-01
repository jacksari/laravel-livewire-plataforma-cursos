<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminTeachersCreate extends Component
{
    public $search;
    public $user;

    public function render()
    {


        return view('livewire.admin.admin-teachers-create');
    }

    public function getResultsProperty(){
        return User::where('name', 'LIKE', '%' . $this->search . '%')
            ->take(8)
            ->get();
    }

    public function users(){
        return User::where('name', 'LIKE', '%' . $this->search . '%')
            ->take(8)
            ->get();
    }

    public function select(User $user){
        //dd($user->name);
        $this->search = null;
        $this->user = $user;
    }
}
