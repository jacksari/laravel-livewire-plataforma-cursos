<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LearningCourse extends Component
{
    public function render()
    {
        return view('livewire.learning-course')->layout('layouts.learning');
    }
}
