<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InterviewScheduleRequestResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InterviewScheduleRequestResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $results = InterviewScheduleRequestResult::all();

         return self::success('Interview Schedule Request Results retrieved successfully', ['data' => $results]);
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
            'interview_schedule_request_id' => 'required|integer',
            'description' => 'required|string',
            'joining_date' => 'required|date', // Adjust validation rules as needed
            'status' => 'required|string',
            // Add other validation rules if needed
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Create an array with the data
        $data = [
            'interview_schedule_request_id' => $request->input('interview_schedule_request_id'),
            'description' => $request->input('description'),
            'joining_date' => $request->input('joining_date'),
            'status' => $request->input('status'),
            // Add other fields if needed
        ];

        try {
            // Create a new InterviewSheduleRequestResult instance and save it to the database
            $interviewSheduleRequestResult = InterviewScheduleRequestResult::create($data);

            // Return success response
            return self::success('Interview Schedule Request Result created successfully', ['data' => $interviewSheduleRequestResult]);
        } catch (\Exception $e) {
            // Return failure response if an exception occurs
            return self::failure('Error creating Interview Schedule Request Result');
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
        $result = InterviewScheduleRequestResult::find($id);

        if (!$result) {
            return self::failure('Interview Schedule Request Result not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'interview_schedule_request_id' => 'required',
            'description' => 'string|max:255',
            'joining_date' => 'date',
            'status' => 'string|max:255',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $resultData = [
            'interview_schedule_request_id' => $data['interview_schedule_request_id'],
            'description' => $data['description'],
            'joining_date' => $data['joining_date'],
            'status' => $data['status'],
        ];

        $result->update($resultData);

        return self::success('Interview Schedule Request Result updated successfully', ['data' => $result]);
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = InterviewScheduleRequestResult::find($id);

        if (!$result) {
            return self::failure('Interview Schedule Request Result not found');
        }

        $result->delete();

        return self::success('Interview Schedule Request Result deleted successfully', ['data' => ['id' => $id]]);
    }
}
