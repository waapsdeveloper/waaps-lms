<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserTaskTrackerTime;
class UserTaskTrackerTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTaskTrackerTimes = UserTaskTrackerTime::all();
        return $this->success('UserTaskTrackerTimes retrieved successfully', ['data' => $userTaskTrackerTimes]);
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
            'user_task_tracker_id' => 'required',
            'record_time' => 'required',
            'record_time_difference' => 'required',
            'timer_status' => 'required',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Your logic to create a UserTaskTrackerTime goes here
        // For example, if UserTaskTrackerTime is a model, you can use create method
        $userTaskTrackerTime = UserTaskTrackerTime::create([
            'user_task_tracker_id' => $request->input('user_task_tracker_id'),
            'record_time' => $request->input('record_time'),
            'record_time_difference' => $request->input('record_time_difference'),
            'timer_status' => $request->input('timer_status'),
        ]);

        // Return a success response with the created UserTaskTrackerTime
        return $this->success('UserTaskTrackerTime created successfully', ['data' => $userTaskTrackerTime]);
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
        // Find the UserTaskTrackerTime by ID
        $userTaskTrackerTime = UserTaskTrackerTime::where('user_task_tracker_id', $id)->first();

        // If the UserTaskTrackerTime is not found, return a failure response
        if (!$userTaskTrackerTime) {
            return $this->failure('UserTaskTrackerTime not found');
        }

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'user_task_tracker_id' => 'required',
            'record_time' => 'required',
            'record_time_difference' => 'required',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Update the UserTaskTrackerTime with the new data
        $userTaskTrackerTime->update([
            'user_task_tracker_id' => $request->input('user_task_tracker_id'),
            'record_time' => $request->input('record_time'),
            'record_time_difference' => $request->input('record_time_difference'),
        ]);

        // Return a success response with the updated UserTaskTrackerTime
        return $this->success('UserTaskTrackerTime updated successfully', ['data' => $userTaskTrackerTime]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userTaskTrackerTime = UserTaskTrackerTime::find($id);

        if (!$userTaskTrackerTime) {
            return $this->failure('UserTaskTrackerTime not found');
        }

        $userTaskTrackerTime->delete();

        return $this->success('UserTaskTrackerTime deleted successfully', ['data' => ['id' => $id]]);
    }
}
