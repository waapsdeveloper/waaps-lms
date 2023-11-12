<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = Role::all();
        return self::success('Roles retrieved successfully', ['data' => $roles]);
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
        //
        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name|string|max:255',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'name' => $data['name'],
            'description' => $data['description'],
        ];

        $role = Role::create($obj);
        return self::success('Role created successfully', ['data' => $role]);
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
    public function update(Request $request, string $id)
    {
        //

        $role = Role::findOrFail($id);

        if (!$role) {
            return self::failure('Role not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'name' => $data['name'],
            'description' => $data['description'],
        ];

        $role = $role->update($obj);
        return self::success('Role updated successfully', ['data' => $role]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $role = Role::findOrFail($id);
        if (!$role) {
            return self::failure('Role not found');
        }

        $role->delete();
        return self::success('Role deleted successfully', ['data' => ['id' => $id]]);
    }
}
