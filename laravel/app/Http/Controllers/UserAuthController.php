<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    // Login Method for Users
    // Example login method in UserAuthController
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        // Create API token for the user
        $token = $user->createToken('user_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'User login successful',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }


    // Logout Method for Users
    public function logout(Request $request)
    {
        // Revoke all tokens for the user
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'User logged out successfully',
        ]);
    }
}
