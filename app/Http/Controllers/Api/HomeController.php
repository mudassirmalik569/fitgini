<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;


class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $packages = Package::all();

        return response()->json([
            'user' => $user,
            'packages' => $packages
        ]);
    }
}
