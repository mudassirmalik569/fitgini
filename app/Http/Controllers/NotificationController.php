<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return view('admin.notification.index');
    }

    public function create()
    {
        return view('admin.notification.create');
    }
}
