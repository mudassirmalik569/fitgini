<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function index()
    {
        return view('admin.goals.index');
    }

    public function create()
    {
        return view('admin.goals.create');
    }
}
