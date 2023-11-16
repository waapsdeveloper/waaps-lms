<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return $this->success('Tasks retrieved successfully', ['data' => $tasks]);
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
            'title' => 'required|string|max:255',
            'description' => 'string',
            'technology_id' => 'required|integer', // Assuming technology_id is an integer
            'duration' => 'required|integer', // Assuming duration is an integer
        ]);

        // If validation fails, return failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create task
        $task = Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'technology_id' => $request->input('technology_id'),
            'duration' => $request->input('duration'),
        ]);

        // Return success response
        return $this->success('Task created successfully', ['data' => $task]);
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
        $task = Task::find($id);

        if (!$task) {
            return $this->failure('Task not found');
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'string',
            'technology_id' => 'required', // You might need to adjust this validation based on your actual requirements
            'duration' => 'required', // You might need to adjust this validation based on your actual requirements
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $data = $request->all();

        $task->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'technology_id' => $data['technology_id'],
            'duration' => $data['duration'],
        ]);

        return $this->success('Task updated successfully', ['data' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return $this->failure('Task not found');
        }

        $task->delete();

        return $this->success('Task deleted successfully', ['data' => ['id' => $id]]);
    }
}
