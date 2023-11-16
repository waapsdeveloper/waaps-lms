<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TrainingGroupLevelTask;
class TrainingGroupLevelTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainingGroupLevelTasks = TrainingGroupLevelTask::all();
        return $this->success('TrainingGroupLevelTasks retrieved successfully', ['data' => $trainingGroupLevelTasks]);
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
            'user_id' => 'required',
            'training_group_level_id' => 'required',
            'task_id' => 'required',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Your logic to create a TrainingGroupLevelTask goes here
        // For example, if TrainingGroupLevelTask is a model, you can use create method
        $trainingGroupLevelTask = TrainingGroupLevelTask::create([
            'user_id' => $request->input('user_id'),
            'training_group_level_id' => $request->input('training_group_level_id'),
            'task_id' => $request->input('task_id'),
        ]);

        // Return a success response with the created TrainingGroupLevelTask
        return $this->success('TrainingGroupLevelTask created successfully', ['data' => $trainingGroupLevelTask]);
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
        // Find the TrainingGroupLevelTask by ID
        $trainingGroupLevelTask = TrainingGroupLevelTask::find($id);

        // If the TrainingGroupLevelTask is not found, return a failure response
        if (!$trainingGroupLevelTask) {
            return $this->failure('TrainingGroupLevelTask not found');
        }

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'training_group_level_id' => 'required',
            'task_id' => 'required',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Update the TrainingGroupLevelTask with the new data
        $trainingGroupLevelTask->update([
            'user_id' => $request->input('user_id'),
            'training_group_level_id' => $request->input('training_group_level_id'),
            'task_id' => $request->input('task_id'),
        ]);

        // Return a success response with the updated TrainingGroupLevelTask
        return $this->success('TrainingGroupLevelTask updated successfully', ['data' => $trainingGroupLevelTask]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trainingGroupLevelTask = TrainingGroupLevelTask::find($id);

        if (!$trainingGroupLevelTask) {
            return $this->failure('TrainingGroupLevelTask not found');
        }

        $trainingGroupLevelTask->delete();

        return $this->success('TrainingGroupLevelTask deleted successfully', ['data' => ['id' => $id]]);
    }
}
