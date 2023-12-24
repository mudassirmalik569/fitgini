<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        return view('admin.social.index');
    }

    public function create()
    {
        return view('admin.social.create');
    }
}
