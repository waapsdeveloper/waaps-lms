<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\WorkingTimeScheduleDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkingTimeScheduleDayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming WorkingTimeScheduleDay is the correct namespace for your model
        $workingTimeScheduleDays = WorkingTimeScheduleDay::all();
        return self::success('WorkingTimeScheduleDays retrieved successfully', ['data' => $workingTimeScheduleDays]);
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
            'working_time_schedule_id' => 'required|numeric',
            'day' => 'required|string',
            'description' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // If validation passes, create a new WorkingTimeScheduleDay
        $data = $request->all();

        $workingTimeScheduleDayData = [
            'working_time_schedule_id' => $data['working_time_schedule_id'],
            'day' => $data['day'],
            'description' => $data['description'],
        ];

        // Assuming your WorkingTimeScheduleDay model is in the "App\Models" namespace
        $workingTimeScheduleDay = WorkingTimeScheduleDay::create($workingTimeScheduleDayData);

        // Return success response with the created WorkingTimeScheduleDay
        return self::success('WorkingTimeScheduleDay created successfully', ['data' => $workingTimeScheduleDay]);
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
    public function updateWorkingTimeScheduleDay(Request $request, string $id)
    {
        $workingTimeScheduleDay = WorkingTimeScheduleDay::where('id', $id)->first();

        if (!$workingTimeScheduleDay) {
            return self::failure('WorkingTimeScheduleDay not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'working_time_schedule_id' => 'required|integer', // Adjust the validation rules accordingly
            'day' => 'required|string|max:255',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'working_time_schedule_id' => $data['working_time_schedule_id'],
            'day' => $data['day'],
            'description' => $data['description'],
        ];

        $workingTimeScheduleDay->update($obj);

        return self::success('WorkingTimeScheduleDay updated successfully', ['data' => $workingTimeScheduleDay]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        // Assuming your model is named WorkingTimeScheduleDay, make sure to adjust the class name accordingly.
        $workingTimeScheduleDay = WorkingTimeScheduleDay::where(['id' => $id])->first();

        if (!$workingTimeScheduleDay) {
            return self::failure('Working Time Schedule Day not found');
        }

        $workingTimeScheduleDay->delete();
        return self::success('Working Time Schedule Day deleted successfully', ['data' => ['id' => $id]]);
    }
}
