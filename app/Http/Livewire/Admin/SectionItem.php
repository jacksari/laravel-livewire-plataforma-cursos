<?php

namespace App\Http\Livewire\Admin;

use App\Models\Lesson;
use App\Models\Platform;
use App\Models\Section;
use Livewire\Component;

class SectionItem extends Component
{
    public $item;
    public $section;
    public $platforms;
    public $name, $platform_id = 1, $key, $time;

    protected $listeners = ['sectionRender' => 'sectionRender'];

    protected $rules = [
        'section.name' => 'required'
    ];

    public function mount(Section $section){
        $this->item = $section;
        $this->section = new Section();
        $this->platforms = Platform::all();


    }

    public function render()
    {
        return view('livewire.admin.section-item');
    }

    public function sectionRender(){
        //dd(Course::find($this->course->id)->sections);
        $this->item = Section::find($this->item->id);
    }

    public function edit(Section $section){
        $this->section = $section;
    }

    public function update(){

        $this->validate();
        $this->section->save();
        $this->section = new Section();
        $this->emit('renderCourse');
        $this->item = Section::find($this->item->id);
    }

    public function updated($name, $value)
    {

    }

    public function delete(Section $section){
        $section->delete();
        $this->emit('renderCourse');
    }

    public function store(){
        $this->validate([
            'name' => 'required',
            'platform_id' => 'required',
            'key' => 'required',
            'time' => 'required'
        ]);
        Lesson::create([
            'name' => $this->name,
            'platform_id' => $this->platform_id,
            'key' => $this->key,
            'time' => $this->time,
            'url' => 'w333',
            'section_id' => $this->item->id,
        ]);
        $this->reset(['name','platform_id','key','time']);
        $this->item = Section::find($this->item->id);
    }
}
