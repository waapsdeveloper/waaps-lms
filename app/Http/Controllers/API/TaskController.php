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
            'user_id' => 'required|integer',
            'level_id' => 'required|integer',
            'task_link_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'string',
            'duration' => 'required|integer',
            'status' => 'required|integer',
        ]);

        // If validation fails, return failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create task
        $task = Task::create([
            'user_id' => $request->input('user_id'),
            'level_id' => $request->input('level_id'),
            'task_link_id' => $request->input('task_link_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'duration' => $request->input('duration'),
            'status' => $request->input('status'),
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
            'user_id' => 'required', // You might need to adjust this validation based on your actual requirements
            'level_id' => 'required', // You might need to adjust this validation based on your actual requirements
            'task_link_id' => 'required', // You might need to adjust this validation based on your actual requirements
            'title' => 'required|string|max:255',
            'description' => 'string',
            'duration' => 'required', // You might need to adjust this validation based on your actual requirements
            'status' => 'required', // You might need to adjust this validation based on your actual requirements
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $data = $request->all();

        $task->update([
            'user_id' => $data['user_id'],
            'level_id' => $data['level_id'],
            'task_link_id' => $data['task_link_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'duration' => $data['duration'],
            'status' => $data['status'],
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
