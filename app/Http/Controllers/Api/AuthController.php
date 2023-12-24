<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // validate the request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // create the user
       $user = new User();
         $user->name = $request->name;
            $user->email = $request->email;
            $user->view_password = $request->password;
            $user->password = Hash::make($request->password);
            $user->referral_link = Str::random(10);
            $user->save();

        // create token for the created user
        $token = $user->createToken('auth_token')->plainTextToken;

        // return the response
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        // validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // find the user
        $user = User::where('email', $request->email)->first();

        // check password
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }

        // create token for the logged in user
        $token = $user->createToken('auth_token')->plainTextToken;

        // return the response
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        // delete the token from the database
        $request->user()->currentAccessToken()->delete();

        // return the response
        return response()->json([
            'message' => 'Logged out successfully',
        ]);
    }


    public function profile(Request $request)
    {
        // return the response
        return response()->json([
            'user' => $request->user(),
        ]);
    }

}
