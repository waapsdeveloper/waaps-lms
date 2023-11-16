<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserTaskTracker;
class UserTaskTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTaskTrackers = UserTaskTracker::all();
        return $this->success('UserTaskTrackers retrieved successfully', ['data' => $userTaskTrackers]);
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
            'date' => 'required',
            'clock' => 'required',
            'timer_status' => 'required',
        ]);
        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create a new UserTaskTracker
        $userTaskTracker = UserTaskTracker::create($request->only(['user_id', 'date', 'clock', 'timer_status']));

        // Return a success response with the created UserTaskTracker
        return $this->success('UserTaskTracker created successfully', ['data' => $userTaskTracker]);
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
    public function update(Request $request, $id)
    {
        // Find the UserTaskTracker by ID
        $userTaskTracker = UserTaskTracker::find($id);

        // If the UserTaskTracker is not found, return a failure response
        if (!$userTaskTracker) {
            return $this->failure('UserTaskTracker not found');
        }

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'date' => 'required',
            'clock' => 'required',
            'timer_status' => 'required',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Update the UserTaskTracker with the new data
        $userTaskTracker->update([
            'user_id' => $request->input('user_id'),
            'date' => $request->input('date'),
            'clock' => $request->input('clock'),
            'timer_status' => $request->input('timer_status'),
        ]);

        // Return a success response with the updated UserTaskTracker
        return $this->success('UserTaskTracker updated successfully', ['data' => $userTaskTracker]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the UserTaskTracker by ID
        $userTaskTracker = UserTaskTracker::find($id);

        // If the UserTaskTracker is not found, return a failure response
        if (!$userTaskTracker) {
            return $this->failure('UserTaskTracker not found');
        }

        // Delete the UserTaskTracker
        $userTaskTracker->delete();

        // Return a success response with the deleted UserTaskTracker's ID
        return $this->success('UserTaskTracker deleted successfully', ['data' => ['id' => $id]]);
    }
}
