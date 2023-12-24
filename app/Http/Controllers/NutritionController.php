<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutritionController extends Controller
{
    public function index()
    {
        return view('admin.nutrition.index');
    }

    public function create()
    {
        return view('admin.nutrition.create');
    }
}
