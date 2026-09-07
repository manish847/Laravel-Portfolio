<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function addUser(Request $request)
    {
        // Example: validate + read inputs
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422); // 422 = Unprocessable Entity
        }

        $data = $validator->validated();

        // dd($data); // for debugging
        return response()->json(['message' => 'User added successfully!', 'data' => $data]);
    }

    public function loginUser(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($data); // for debugging
        return response()->json(['message' => 'User loggedIn successfully!', 'data' => $data]);
    }
}
