<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{

    public function index()
    {
        return view('admin.teachers.index');
    }


    public function create()
    {
        return view('admin.teachers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:teachers,slug'
        ]);

        if ($request->file('image')){
            $url = Storage::put('public/image/teachers', $request->file('image'));
        } else {
            $url = 'https://www.clinicadentalceballos.com/wp-content/uploads/2018/10/ortodoncia-malaga-user-not-found.jpg';
        }
        $teacher = Teacher::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'website' => $request->website,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'image' => $url,
            'user_id' => auth()->user()->id
        ]);
        return view('admin.teachers.index');
    }


    public function show($id)
    {
        //
    }


    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }


    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required'
        ]);

        if ($request->file('image')){
            Storage::disk()->delete($teacher->image);
            $url = Storage::put('public/image/teachers', $request->file('image'));
            $teacher->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'website' => $request->website,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
                'image' => $url,
            ]);
        } else {
            $teacher->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'website' => $request->website,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
            ]);
        }

        return redirect()->route('admin.teachers.index');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('admin.teachers.index');
    }
}
