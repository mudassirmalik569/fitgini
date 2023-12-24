<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login()
    {
    // dd(request()->all());
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput(request()->only('email', 'remember'));
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('/');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

}
