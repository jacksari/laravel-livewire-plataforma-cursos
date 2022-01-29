<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

class CourseLearning extends Component
{

    public $course;
    public $current;

    public function mount(Course $course){
        $this->course = $course;

        foreach ($course->lessons as $lesson){
            if(!$lesson->complete){
                // TODO solo sirve para lecciones consecutivas
                $this->current = $lesson;
                break;
            }
        }
    }

    public function render()
    {
        return view('livewire.course-learning')->layout('layouts.learning');
    }

    public function changeLesson(Lesson $lesson){
        $this->current = $lesson;
    }

    public function resetCurrent($id){
        $this->index = $this->course->lessons->pluck('id')->search($id);
        if($this->index == 0){
            $this->previous = null;
        } else{
            $this->previous = $this->course->lessons[$this->index - 1];
        }
        if($this->index == $this->course->lessons->count() - 1){
            $this->previous = null;
        } else{
            $this->previous = $this->course->lessons[$this->index + 1];
        }
    }

    public function getIndexProperty(){
        return $this->course->lessons->pluck('id')->search($this->current->id);
    }

    public function getPreviousProperty(){
        if($this->index == 0){
            return null;
        } else{
            return $this->course->lessons[$this->index - 1];
        }
    }

    public function getNextProperty(){
        if($this->index == $this->course->lessons->count() - 1){
            return null;
        } else{
            return $this->course->lessons[$this->index + 1];
        }
    }
}
