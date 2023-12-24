<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\AppContent;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'nullable',
            'email' => 'required|unique:users',
            'password' => 'required',
            'age' => 'nullable',
            'weight' => 'nullable',
            'height' => 'nullable',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone ?? null;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->age = $request->age ?? null;
        $user->weight = $request->weight ?? null;
        $user->height = $request->height ?? null;
        $user->save();

        return redirect()->route('admin.user')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'nullable',
            'email' => 'required|unique:users,email,' . $id,
            'password' => 'nullable',
            'age' => 'nullable',
            'weight' => 'nullable',
            'height' => 'nullable',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone ?? null;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->age = $request->age ?? null;
        $user->weight = $request->weight ?? null;
        $user->height = $request->height ?? null;
        $user->save();

        return redirect()->route('admin.user')->with('success', 'User updated successfully.');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.user')->with('success', 'User deleted successfully.');
    }


    


 
}
