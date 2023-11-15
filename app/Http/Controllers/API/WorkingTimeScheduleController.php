<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\WorkingTimeSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkingTimeScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workingTimeSchedules = WorkingTimeSchedule::all();
        return self::success('WorkingTimeSchedules retrieved successfully', ['data' => $workingTimeSchedules]);
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
            'name' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // If validation passes, create a new working time schedule
        $data = $request->all();

        $scheduleData = [
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'description' => $data['description'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
        ];

        // Assuming your WorkingTimeSchedule model is in the "App\Models" namespace
        $workingTimeSchedule = WorkingTimeSchedule::create($scheduleData);

        // Return success response with the created working time schedule
        return self::success('WorkingTimeSchedule created successfully', ['data' => $workingTimeSchedule]);
    }
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
        // Retrieve the WorkingTimeSchedule instance
        $schedule = WorkingTimeSchedule::where('id', $id)->first();

        // Check if the WorkingTimeSchedule instance exists
        if (!$schedule) {
            return self::failure('WorkingTimeSchedule not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required', // Add any specific validation rules for 'user_id'
            'name' => 'required|string|max:255',
            'description' => 'string',
            'start_date' => 'required|date', // Add any specific validation rules for 'start_date'
            'end_date' => 'required|date',   // Add any specific validation rules for 'end_date'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Create an array with the data to be updated
        $obj = [
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'description' => $data['description'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
        ];

        // Update the WorkingTimeSchedule instance
        $schedule = $schedule->update($obj);

        return self::success('WorkingTimeSchedule updated successfully', ['data' => $schedule]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $workingTimeSchedule = WorkingTimeSchedule::where(['id' => $id])->first();

        if (!$workingTimeSchedule) {
            return self::failure('Working Time Schedule not found');
        }

        $workingTimeSchedule->delete();

        return self::success('Working Time Schedule deleted successfully', ['data' => ['id' => $id]]);
    }
}
