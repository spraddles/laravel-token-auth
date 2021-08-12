<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */

    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
            //'device_name' => 'required',
        ]);

        // find user
        $user = User::where('email', $request->email)->first();

        if (Auth::attempt($credentials)) {

            // revoke old tokens
            $user->tokens()->delete();

            // create new token
            $user->createToken('Web');

            return response()->json([
                // login success
                'message' => 'Login success'
            ]);
        }
        else {
            return response()->json([
                // login fail
                'message' => 'Login fail'
            ]);
        }
    }

    public function logout(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email'
        ]);

        // find user
        $user = User::where('email', $request->email)->first();

        if ($user) {

            // revoke old tokens
            $user->tokens()->delete();

            return response()->json([
                // logout success
                'message' => 'Logged out'
            ]);
        }
        else {
            return response()->json([
                // logout fail
                'message' => 'User details invalid'
            ]);
        }
    }
}