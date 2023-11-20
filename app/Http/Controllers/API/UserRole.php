<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userRoles = UserRole::all();

        return self::success('User roles retrieved successfully', ['data' => $userRoles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // Validation rules
        $validator = Validator::make($data, [
            'user_id' => 'required|integer',
            'role_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Assuming you have a User and Role model defined in your application
        // You may need to adjust these namespaces accordingly
        $user = \App\Models\User::find($data['user_id']);
        $role = \App\Models\Role::find($data['role_id']);

        if (!$user || !$role) {
            return self::failure('User or Role not found');
        }

        // Create UserRole
        $userRole = UserRole::create([
            'user_id' => $data['user_id'],
            'role_id' => $data['role_id'],
        ]);

        return self::success('UserRole created successfully', ['data' => $userRole]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id, $role_id)
    {
        $userRole = UserRole::where('user_id', $user_id)
            ->where('role_id', $role_id)
            ->first();

        if (!$userRole) {
            return self::failure('UserRole not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'some_field' => 'required|string|max:255', // Replace 'some_field' with the actual field name you want to update
            'another_field' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $updateData = [
            'some_field' => $data['some_field'],
            'another_field' => $data['another_field'],
            // Add more fields as needed
        ];

        $userRole->update($updateData);

        return self::success('UserRole updated successfully', ['data' => $userRole]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userRole = UserRole::find($id);

        if (!$userRole) {
            return self::failure('User Role not found');
        }

        $userRole->delete();

        return self::success('User Role deleted successfully', ['data' => ['id' => $id]]);
    }
}
