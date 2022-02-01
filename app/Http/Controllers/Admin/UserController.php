<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer usuarios')->only('index');
        $this->middleware('can:Crear usuarios')->only('create','store');
        $this->middleware('can:Actualizar usuarios')->only('edit','update');
        $this->middleware('can:Eliminar usuarios')->only('destroy');
    }

    public function index()
    {

        return view('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::all()->where('id', $id);
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'slug' => 'required|unique:users,slug',
            'roles' => 'required'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'slug' => $request->slug
        ]);

        return redirect()->route('admin.users.edit', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
