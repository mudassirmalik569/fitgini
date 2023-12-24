<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Withdraw;

class WithdarwController extends Controller
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

    public function withdraw(Request $request)
    {
        $withdraw = new Withdraw();
        $withdraw->user_id = auth()->user()->id;
        $withdraw->package_id = $request->package_id;
        $withdraw->amount = $request->amount;
        $withdraw->payment_method = $request->payment_method;
        $withdraw->payment_id = $request->payment_id;
        $withdraw->payment_pic = $request->payment_pic;
        $withdraw->save();

        return response()->json([
            'message' => 'Withdraw created successfully'
        ]);
    }

    
}
