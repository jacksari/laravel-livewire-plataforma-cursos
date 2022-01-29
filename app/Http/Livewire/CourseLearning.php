<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Str;
use Livewire\Component;

class CourseLearning extends Component
{
    use AuthorizesRequests;

    public $course;
    public $current;

    public function mount(Course $course){
        $this->course = $course;

        $this->authorize('enrolled', $course);

        foreach ($course->lessons as $lesson){
            if(!$lesson->complete){
                // TODO solo sirve para lecciones consecutivas
                $this->current = $lesson;
                break;
            }
        }

        if(!$this->current){
            $this->current = $course->lessons->last();
        }
    }

    public function render()
    {
        return view('livewire.course-learning')->layout('layouts.learning');
    }

    // Metodos

    public function changeLesson(Lesson $lesson){
        $this->current = $lesson;
    }

    public function completed(){
        if ($this->current->complete){
            // Eliminar registro
            $this->current->users()->detach(auth()->user()->id);
        } else {
           // Agregar registro
            $this->current->users()->attach(auth()->user()->id);
        }
        $this->current = Lesson::find($this->current->id);
        $this->course = Course::find($this->course->id);
    }

    public function toggle(Lesson $lesson){
        if($lesson->id == $this->current->id){
            if ($lesson->complete){
                // Eliminar registro
                $this->current->users()->detach(auth()->user()->id);
            } else {
                // Agregar registro
                $this->current->users()->attach(auth()->user()->id);
            }
            $this->course = Course::find($this->course->id);
            $this->current = Lesson::find($this->current->id);
        } else {
            if ($lesson->complete){
                // Eliminar registro
                $lesson->users()->detach(auth()->user()->id);
            } else {
                // Agregar registro
                $lesson->users()->attach(auth()->user()->id);
            }
            $this->course = Course::find($this->course->id);
        }
    }

    // Propiedades computadas

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

    public function getAdvanceProperty(){
        $i = 0;
        foreach ($this->course->lessons as $lesson){
            if($lesson->complete){
                $i++;
            }
        }
        $advance = ($i * 100) / ($this->course->lessons->count());
        return round($advance, 1);
    }
}
