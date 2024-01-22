<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $level = Level::all();
        return $this->success('Tasks retrieved successfully', ['data' => $level]);
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
        // Validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'string',
            'tech_stack' => 'required|string',
        ]);

        // If validation fails, return failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create level
        $level = Level::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'tech_stack' => $request->input('tech_stack'),
        ]);

        // Return success response
        return $this->success('Level created successfully', ['data' => $level]);
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
        $level = Level::find($id);

        if (!$level) {
            return $this->failure('Level not found');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'string',
            'tech_stack' => 'required', // You might need to adjust this validation based on your actual requirements
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $data = $request->all();

        $level->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'tech_stack' => $data['tech_stack'],
        ]);

        return $this->success('Level updated successfully', ['data' => $level]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $level = Level::find($id);

        if (!$level) {
            return $this->failure('level not found');
        }

        $level->delete();

        return $this->success('level deleted successfully', ['data' => ['id' => $id]]);
    }
}
