<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserTracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTracker = UserTracker::all(['user_id', 'date', 'clock', 'timer_status']);
        return self::success('UserTracker retrieved successfully', ['data' => $userTracker]);
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
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|numeric',
            'date' => 'required|date',
            'clock' => 'required|string',
            'timer_status' => 'required|boolean',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // If validation passes, create a new user tracker
        $data = $request->all();

        $trackerData = [
            'user_id' => $data['user_id'],
            'date' => $data['date'],
            'clock' => $data['clock'],
            'timer_status' => $data['timer_status'],
        ];

        // Assuming your UserTracker model is in the "App\Models" namespace
        $userTracker = UserTracker::create($trackerData);

        // Return success response with the created user tracker
        return self::success('UserTracker created successfully', ['data' => $userTracker]);
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
        $userTracker = UserTracker::find($id);

        if (!$userTracker) {
            return self::failure('UserTracker not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'user_id' => 'required',
            // Add your validation rules for each parameter
            'date' => 'required',
            'clock' => 'required',
            'timer_status' => 'required',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $userTracker->update([
            'user_id' => $data['user_id'],
            'date' => $data['date'],
            'clock' => $data['clock'],
            'timer_status' => $data['timer_status'],
        ]);

        return self::success('UserTracker updated successfully', ['data' => $userTracker]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming UserTracker is the model you want to use
        $userTracker = UserTracker::where(['id' => $id])->first();

        if (!$userTracker) {
            return self::failure('User Tracker not found');
        }

        $userTracker->delete();

        return self::success('User Tracker deleted successfully', ['data' => ['id' => $id]]);
    }
}

