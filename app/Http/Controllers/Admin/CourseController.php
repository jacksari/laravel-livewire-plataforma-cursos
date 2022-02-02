<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Level;
use App\Models\Price;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.courses.index');
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'level_id' => 'required',
            'category_id' => 'required',
            'price_id' => 'required',
            'slug' => 'required|unique:courses,slug',
            'image' => 'required|image',
        ]);

        if ($request->file('image')){
            $url = Storage::put('public/image/courses', $request->file('image'));

        } else {
            $url = 'https://baltrion.es/wp-content/uploads/sin-IMAGEN.jpg';
        }
        $course = Course::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'level_id' => $request->level_id,
            'category_id' => $request->category_id,
            'price_id' => $request->price_id,
            'slug' => 'required|unique:courses,slug,' . $course->id,
            'video' => '78701544',
            'teacher_id' => $request->teacher_id
        ]);
        $course->image()->create([
            'url' => $url,
        ]);
        return view('admin.courses.index');
    }

    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $categories = Category::pluck('name','id');
        $levels = Level::pluck('name','id');
        $prices = Price::pluck('name','id');
        return view('admin.courses.edit', compact('course','categories','levels','prices'));
    }


    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'level_id' => 'required',
            'category_id' => 'required',
            'price_id' => 'required',
            'slug' => 'required',
            'image' => 'required|image',
        ]);

        $course->update($request->all());

        if ($request->file('image')){
            $url = Storage::put('public/image/courses', $request->file('image'));
            if($course->image){
                Storage::delete($course->image->url);
                $course->image->update([
                    'url' => $url,
                ]);
            } else{
                $course->image->update([
                    'url' => $url,
                ]);
            }
        }

        $categories = Category::pluck('name','id');
        $levels = Level::pluck('name','id');
        $prices = Price::pluck('name','id');
        return view('admin.courses.edit', compact('course','categories','levels','prices'));
    }


    public function destroy(Course $course)
    {
        Storage::delete($course->image->url);
        $course->image->delete();
        $course->delete();
        return redirect()->route('admin.courses.index');
    }

    public function createForTeacher(Teacher $teacher){
        $categories = Category::pluck('name','id');
        $levels = Level::pluck('name','id');
        $prices = Price::pluck('name','id');
        return view('admin.courses.create-course-user', compact('teacher','categories','levels','prices'));
    }

    public function sections(Course $course){
        return view('admin.courses.section', compact('course'));
    }
}
