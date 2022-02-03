<?php

namespace App\Http\Livewire\Admin;

use App\Models\Lesson;
use App\Models\Platform;
use App\Models\Section;
use Livewire\Component;

class CourseLesson extends Component
{
    public $item;
    public $lesson;
    public $platforms;

    protected $listeners = ['lessonRender' => 'lessonRender'];

    protected $rules = [
        'lesson.name' => 'required',
        'lesson.platform_id' => 'required',
        'lesson.key' => 'required',
        'lesson.time' => 'required'
    ];

    public function mount(Lesson $lesson){
        $this->item = $lesson;
        $this->lesson = new Lesson();
        $this->platforms = Platform::all();
    }

    public function render()
    {
        return view('livewire.admin.course-lesson');
    }

    public function edit(Lesson $lesson){
        $this->lesson = $lesson;
        $this->resetValidation();
    }

    public function update(){

        $this->validate();
        $this->lesson->save();
        $this->lesson = new Section();
        //$this->emit('renderCourse');
        $this->item = Lesson::find($this->item->id);
    }

    public function delete(Lesson $lesson){
        $lesson->delete();
        $this->emit('sectionRender');
    }

    public function cancel(){
        $this->lesson = new Lesson();
    }

    public function lessonRender(){
        //dd(Course::find($this->course->id)->sections);
        $this->item = Lesson::find($this->item->id);
    }
}
