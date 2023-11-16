<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();
        return $this->success('Technologies retrieved successfully', ['data' => $technologies]);
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

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:technologies,name|string|max:255',
            'description' => 'string',
          //  'parent_id' => 'nullable|exists:technologies,id', // Assuming parent_id is optional and should exist in the technologies table
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $technology = Technology::create([
            'name' => $data['name'],
            'description' => $data['description'],
          //  'parent_id' => $data['parent_id'],
        ]);

        return $this->success('Technology created successfully', ['data' => $technology]);
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
        $technology = Technology::find($id);

        if (!$technology) {
            return $this->failure('Technology not found');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'string',
            'parent_id' => 'exists:technologies,id', // Assuming 'parent_id' is a foreign key to the 'technologies' table
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $data = $request->only(['name', 'description', 'parent_id']);

        $technology->update($data);

        return $this->success('Technology updated successfully', ['data' => $technology]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $technology = Technology::find($id);

        if (!$technology) {
            return $this->failure('Technology not found');
        }

        $technology->delete();

        return $this->success('Technology deleted successfully', ['data' => ['id' => $id]]);
    }
}
