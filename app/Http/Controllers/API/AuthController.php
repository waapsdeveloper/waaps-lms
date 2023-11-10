<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AuthController extends Controller
{
    public function login(Request $request)
    {

    }

    //create
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:3',
        ]);
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);


        return self::success('User created successfully', ['data' => $request->all()]);
    }

    // update
    public function update(Request $request, $userid)
    {
        // Validation rules
        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255',
        ]);

        $user = User::find($userid);
        if (!$user) {
            return self::failure(['message' => 'User not found'], 404);
        }

        foreach ($validatedData as $key => $value) {
            if (Schema::hasColumn('users', $key)) {
                $user->$key = $value;
            } else {
                return self::failure(['message' => 'Invalid column: ' . $key], 400);
            }
        }

        $user->save();

        return self::success('User updated successfully', ['data' => $user->toArray()]);
    }
    // get read

    public function getAllUsers()
    {
        try {
            $users = User::all();
            return response()->json(['result' => true, 'users' => $users], 200);
        } catch (\Exception $e) {

            return response()->json(['result' => false, 'error' => $e->getMessage()], 500);
        }
    }
    // delete
    public function delete(Request $request, $userid)
    {
        // Find the user by ID
        $user = User::find($userid);

        // Check if the user exists
        if (!$user) {
            return self::failure(['message' => 'User not found'], 404);
        }

        // Delete the user
        $user->delete();

        return self::success('User deleted successfully');
    }

}
