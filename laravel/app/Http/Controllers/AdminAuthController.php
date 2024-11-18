<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin || !Hash::check($request->password, $admin->password)) {
            return response()->json(['error' => 'Invalid Credentials'], 400);
        }

        $token = $admin->createToken('admin_token', ['role:admin'])->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Admin login successful',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Admin logged out successfully',
        ]);
    }
}
