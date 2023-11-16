<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = UserTask::all();
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
        $data = $request->all();

        $validator = Validator::make($data, [
            'user_id' => 'required|integer',
            'task_id' => 'required|integer',
            'is_completed' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $userTask = UserTask::create([
            'user_id' => $data['user_id'],
            'task_id' => $data['task_id'],
            'is_completed' => $data['is_completed'],
        ]);

        return $this->success('UserTask created successfully', ['data' => $userTask]);
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
        // Find the UserTask by id
        $userTask = UserTask::where('id', $id)->first();
        if (!$userTask) {
            return $this->failure('UserTask not found');
        }

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'task_id' => 'required',
            'is_completed' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Update the UserTask
        $userTask->user_id = $request->input('user_id');
        $userTask->task_id = $request->input('task_id');
        $userTask->is_completed = $request->input('is_completed');
        $userTask->save();

        return $this->success('UserTask updated successfully', ['data' => $userTask]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userTask = UserTask::find($id);

        if (!$userTask) {
            return $this->failure('UserTask not found');
        }

        $userTask->delete();

        return $this->success('UserTask deleted successfully', ['data' => ['id' => $id]]);
    }
}
