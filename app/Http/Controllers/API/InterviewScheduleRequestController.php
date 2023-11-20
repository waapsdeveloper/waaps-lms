<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InterviewScheduleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InterviewScheduleRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $scheduleRequests = InterviewScheduleRequest::all();

         return self::success('Interview Schedule Requests retrieved successfully', ['data' => $scheduleRequests]);
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
            'user_id' => 'required|integer',
            'date' => 'required|date', // Adjust validation rules as needed
            'time' => 'required|string', // Adjust validation rules as needed
            'description' => 'required|string',
            'cv_link' => 'required|url',
            'status' => 'required|string',
            // Add other validation rules if needed
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Create an array with the data
        $data = [
            'user_id' => $request->input('user_id'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'description' => $request->input('description'),
            'cv_link' => $request->input('cv_link'),
            'status' => $request->input('status'),
            // Add other fields if needed
        ];

        try {
            // Create a new InterviewSheduleRequest instance and save it to the database
            $interviewSheduleRequest = InterviewScheduleRequest::create($data);

            // Return success response
            return self::success('Interview Schedule Request created successfully', ['data' => $interviewSheduleRequest]);
        } catch (\Exception $e) {
            // Return failure response if an exception occurs
            return self::failure('Error creating Interview Schedule Request');
        }
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
        $InterviewscheduleRequest = InterviewScheduleRequest::where('id', $id)->first();
        if (!$InterviewscheduleRequest) {
            return self::failure('Interview Schedule Request not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'user_id' => 'string|max:255',
            'date' => 'date',
            'time' => 'string|max:255',
            'description' => 'string',
            'cv_link' => 'string',
            'status' => 'string|max:255',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $InterviewscheduleRequestData = [
            'user_id' => $data['user_id'],
            'date' => $data['date'],
            'time' => $data['time'],
            'description' => $data['description'],
            'cv_link' => $data['cv_link'],
            'status' => $data['status'],
        ];

        $InterviewscheduleRequest->update($InterviewscheduleRequestData);

        return self::success('Interview Schedule Request updated successfully', ['data' => $InterviewscheduleRequest]);
    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $scheduleRequest = InterviewScheduleRequest::find($id);

        if (!$scheduleRequest) {
            return self::failure('Interview Schedule Request not found');
        }

        $scheduleRequest->delete();

        return self::success('Interview Schedule Request deleted successfully', ['data' => ['id' => $id]]);
    }
}
