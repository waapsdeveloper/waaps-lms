<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TrainingGroup;
class TrainingGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all TrainingGroups
        $trainingGroups = TrainingGroup::all();

        // Return a success response with the retrieved TrainingGroups
        return $this->success('TrainingGroups retrieved successfully', ['data' => $trainingGroups]);
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
            'training_id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Your logic to create a TrainingGroup goes here
        // For example, if TrainingGroup is a model, you can use create method
        $trainingGroup = TrainingGroup::create([
            'training_id' => $request->input('training_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Return a success response with the created TrainingGroup
        return $this->success('TrainingGroup created successfully', ['data' => $trainingGroup]);
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
        // Find the TrainingGroup by ID
        $trainingGroup = TrainingGroup::where('id', $id)->first();

        // If the TrainingGroup is not found, return a failure response
        if (!$trainingGroup) {
            return $this->failure('TrainingGroup not found');
        }

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'training_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'string',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Update the TrainingGroup with the new data
        $trainingGroup->update([
            'training_id' => $request->input('training_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Return a success response with the updated TrainingGroup
        return $this->success('TrainingGroup updated successfully', ['data' => $trainingGroup]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trainingGroup = TrainingGroup::find($id);

        if (!$trainingGroup) {
            return $this->failure('TrainingGroup not found');
        }

        $trainingGroup->delete();

        return $this->success('TrainingGroup deleted successfully', ['data' => ['id' => $id]]);
    }
}
