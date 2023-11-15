<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\WorkingTimeScheduleTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkingTimeScheduleTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workingTimeScheduleTime = WorkingTimeScheduleTime::all();
        return self::success('WorkingTimeScheduleTime retrieved successfully', ['data' => $workingTimeScheduleTime]);
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
            'working_time_schedule_day_id' => 'required|numeric',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s',
            'description' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // If validation passes, create a new working time schedule time
        $data = $request->all();

        $workingTimeScheduleTimeData = [
            'working_time_schedule_day_id' => $data['working_time_schedule_day_id'],
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'description' => $data['description'],
        ];

        // Assuming your WorkingTimeScheduleTime model is in the "App\Models" namespace
        $workingTimeScheduleTime = WorkingTimeScheduleTime::create($workingTimeScheduleTimeData);

        // Return success response with the created working time schedule time
        return self::success('WorkingTimeScheduleTime created successfully', ['data' => $workingTimeScheduleTime]);
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
    public function updateWorkingTimeScheduleTime(Request $request, string $id)
    {
        $workingTimeScheduleTime = WorkingTimeScheduleTime::find($id);

        if (!$workingTimeScheduleTime) {
            return self::failure('WorkingTimeScheduleTime not found');
        }

        $validator = Validator::make($request->all(), [
            'working_time_schedule_day_id' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'description' => 'string|max:255',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $data = $request->all();

        $obj = [
            'working_time_schedule_day_id' => $data['working_time_schedule_day_id'],
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'description' => $data['description'],
        ];

        $workingTimeScheduleTime->update($obj);

        return self::success('WorkingTimeScheduleTime updated successfully', ['data' => $workingTimeScheduleTime]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
{
    $workingTimeScheduleTime = WorkingTimeScheduleTime::where(['id' => $id])->first();

    if (!$workingTimeScheduleTime) {
        return self::failure('Working time schedule time not found');
    }

    $workingTimeScheduleTime->delete();

    return self::success('Working time schedule time deleted successfully', ['data' => ['id' => $id]]);
}
}
