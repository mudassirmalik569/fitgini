<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Subscription;

class SubscriptionController extends Controller
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

    public function subscribe(Request $request)
    {
        $subscription = new Subscription();
        $subscription->user_id = auth()->user()->id;
        $subscription->package_id = $request->package_id;
        $subscription->amount = $request->amount;
        $subscription->payment_method = $request->payment_method;
        $subscription->payment_id = $request->payment_id;
        $subscription->payment_pic = $request->payment_pic;
        $subscription->save();

        return response()->json([
            'message' => 'Subscription created successfully'
        ]);
    }
}
