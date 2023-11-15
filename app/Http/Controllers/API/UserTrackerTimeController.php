<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserTrackerTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTrackerTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTrackerTime = UserTrackerTime::all();
        return self::success('UserTrackerTime retrieved successfully', ['data' => $userTrackerTime]);
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
        'user_tracker_id' => 'required|numeric',
        'record_time' => 'required|string',
        'record_time_difference' => 'required|string',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return self::failure($validator->errors()->first());
    }

    // If validation passes, create a new user tracker time
    $data = $request->all();

    $trackerTimeData = [
        'user_tracker_id' => $data['user_tracker_id'],
        'record_time' => $data['record_time'],
        'record_time_difference' => $data['record_time_difference'],
    ];

    // Assuming your UserTrackerTime model is in the "App\Models" namespace
    $userTrackerTime = UserTrackerTime::create($trackerTimeData);

    // Return success response with the created user tracker time
    return self::success('UserTrackerTime created successfully', ['data' => $userTrackerTime]);
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
    public function update(Request $request, string $user_tracker_id)
    {
        $userTrackerTime = UserTrackerTime::where('id', $user_tracker_id)->first();

        if (!$userTrackerTime) {
            return self::failure('User Tracker Time not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'record_time' => 'required|date',
            'record_time_difference' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'record_time' => $data['record_time'],
            'record_time_difference' => $data['record_time_difference'],
        ];

        $userTrackerTime = $userTrackerTime->update($obj);

        return self::success('User Tracker Time updated successfully', ['data' => $userTrackerTime]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
{
    // Assuming your model is named UserTrackerTime, adjust it if needed
    $userTrackerTime = UserTrackerTime::where(['id' => $id])->first();

    if (!$userTrackerTime) {
        return self::failure('User Tracker Time not found');
    }

    $userTrackerTime->delete();

    return self::success('User Tracker Time deleted successfully', ['data' => ['id' => $id]]);
}
}
