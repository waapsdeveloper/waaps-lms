<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserTaskSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTaskSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named UserTaskSubmission
        $userTaskSubmissions = UserTaskSubmission::all();

        return $this->success('UserTaskSubmissions retrieved successfully', ['data' => $userTaskSubmissions]);
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

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'task_id' => 'required',
            'instructor_id' => 'required',
            'instructor_remarks' => 'string',
            'percentage_completed' => 'numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'user_id' => $data['user_id'],
            'task_id' => $data['task_id'],
            'instructor_id' => $data['instructor_id'],
            'instructor_remarks' => $data['instructor_remarks'],
            'percentage_completed' => $data['percentage_completed'],
        ];

        $userTaskSubmission = UserTaskSubmission::create($obj);

        return self::success('UserTaskSubmission created successfully', ['data' => $userTaskSubmission]);
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
        $userTaskSubmission = UserTaskSubmission::where('id', $id)->first();
        if (!$userTaskSubmission) {
            return self::failure('UserTaskSubmission not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'task_id' => 'required|exists:tasks,id',
            'instructor_id' => 'required|exists:instructors,id',
            'instructor_remarks' => 'string',
            'percentage_completed' => 'numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $submissionData = [
            'user_id' => $data['user_id'],
            'task_id' => $data['task_id'],
            'instructor_id' => $data['instructor_id'],
            'instructor_remarks' => $data['instructor_remarks'],
            'percentage_completed' => $data['percentage_completed'],
        ];

        $userTaskSubmission->update($submissionData);

        return self::success('UserTaskSubmission updated successfully', ['data' => $userTaskSubmission]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named UserTaskSubmission
        $submission = UserTaskSubmission::where(['id' => $id])->first();

        if (!$submission) {
            return $this->failure('UserTaskSubmission not found');
        }

        $submission->delete();

        return $this->success('UserTaskSubmission deleted successfully', ['data' => ['id' => $id]]);
    }
}
