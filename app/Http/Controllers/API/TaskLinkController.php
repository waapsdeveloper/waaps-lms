<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TaskLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskLinks = TaskLink::all();
        return $this->success('Task links retrieved successfully', ['data' => $taskLinks]);
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
        $validator = Validator::make($request->all(), [
            'task_id' => 'required|integer', // Assuming task_id is an integer
            'link' => 'required|string|max:255',
        ]);

        // If validation fails, return failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create a new TaskLink instance
        $taskLink = TaskLink::create([
            'task_id' => $data['task_id'],
            'link' => $data['link'],
        ]);

        // Return success response
        return $this->success('TaskLink created successfully', ['data' => $taskLink]);
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
        $taskLink = TaskLink::where('id', $id)->first();

        if (!$taskLink) {
            return $this->failure('TaskLink not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'task_id' => 'required',
            'link' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $taskLink->update([
            'task_id' => $data['task_id'],
            'link' => $data['link'],
            // Add more fields as needed
        ]);

        return $this->success('TaskLink updated successfully', ['data' => $taskLink]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $taskLink = TaskLink::find($id);

        if (!$taskLink) {
            return $this->failure('TaskLink not found');
        }

        $taskLink->delete();

        return $this->success('TaskLink deleted successfully', ['data' => ['id' => $id]]);
    }
}
