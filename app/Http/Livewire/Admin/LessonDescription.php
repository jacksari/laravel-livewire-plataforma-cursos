<?php

namespace App\Http\Livewire\Admin;

use App\Models\Lesson;
use Livewire\Component;

class LessonDescription extends Component
{
    public $lesson, $description, $name;

    protected $rules = [
        'description.name' => 'required',
    ];

    public function mount(Lesson $lesson){
        $this->lesson = $lesson;
        if ($lesson->description){
           $this->description =  $lesson->description;
        }
    }

    public function render()
    {
        return view('livewire.admin.lesson-description');
    }

    public function update(){
        $this->validate();
        $this->description->save();
        //$this->emit('lessonRender');
        $this->lesson = Lesson::find($this->lesson->id);
    }

    public function destroy(){
        $this->description->delete();
        $this->reset('description');
        //$this->emit('lessonRender');
        $this->lesson = Lesson::find($this->lesson->id);

    }

    public function store(){
        $this->description = $this->lesson->description()->create([
            'name' => $this->name,
        ]);

        $this->lesson = Lesson::find($this->lesson->id);
        $this->reset('name');
    }
}
