<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TrainingGroupLevel;
class TrainingGroupLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all TrainingGroupLevels
        $trainingGroupLevels = TrainingGroupLevel::all();

        // Return a success response with the retrieved TrainingGroupLevels
        return $this->success('TrainingGroupLevels retrieved successfully', ['data' => $trainingGroupLevels]);
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
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'group_id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Your logic to create a TrainingGroupLevel goes here
        // For example, if TrainingGroupLevel is a model, you can use create method
        $trainingGroupLevel = TrainingGroupLevel::create([
            'group_id' => $request->input('group_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Return a success response with the created TrainingGroupLevel
        return $this->success('TrainingGroupLevel created successfully', ['data' => $trainingGroupLevel]);
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
        // Find the TrainingGroupLevel by ID
        $trainingGroupLevel = TrainingGroupLevel::where('id', $id)->first();

        // If the TrainingGroupLevel is not found, return a failure response
        if (!$trainingGroupLevel) {
            return $this->failure('TrainingGroupLevel not found');
        }

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'group_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'string',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Update the TrainingGroupLevel with the new data
        $trainingGroupLevel->update([
            'group_id' => $request->input('group_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Return a success response with the updated TrainingGroupLevel
        return $this->success('TrainingGroupLevel updated successfully', ['data' => $trainingGroupLevel]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trainingGroupLevel = TrainingGroupLevel::find($id);

        if (!$trainingGroupLevel) {
            return $this->failure('TrainingGroupLevel not found');
        }

        $trainingGroupLevel->delete();

        return $this->success('TrainingGroupLevel deleted successfully', ['data' => ['id' => $id]]);
    }

}
