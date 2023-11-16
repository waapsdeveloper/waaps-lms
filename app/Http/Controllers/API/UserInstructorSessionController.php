<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserInstructorSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserInstructorSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named UserInstructorSession
        $sessions = UserInstructorSession::all();

        return $this->success('Sessions retrieved successfully', ['data' => $sessions]);
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

        $validator = Validator::make($data, [
            'instructor_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'session_type' => 'required|string|max:255',
            'duration' => 'required|numeric',
            'instructor_remarks' => 'string',
            'percentage' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'instructor_id' => $data['instructor_id'],
            'user_id' => $data['user_id'],
            'session_type' => $data['session_type'],
            'duration' => $data['duration'],
            'instructor_remarks' => $data['instructor_remarks'],
            'percentage' => $data['percentage'],
        ];

        $userInstructorSession = UserInstructorSession::create($obj);
        return self::success('UserInstructorSession created successfully', ['data' => $userInstructorSession]);
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
        // Find the UserInstructorSession by id
        $session = UserInstructorSession::find($id);

        if (!$session) {
            return self::failure('UserInstructorSession not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'instructor_id' => 'required|exists:instructors,id',
            'user_id' => 'required|exists:users,id',
            'session_type' => 'required|string|max:255',
            'duration' => 'required|numeric|min:0',
            'instructor_remarks' => 'string',
            'percentage' => 'numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $sessionData = [
            'instructor_id' => $data['instructor_id'],
            'user_id' => $data['user_id'],
            'session_type' => $data['session_type'],
            'duration' => $data['duration'],
            'instructor_remarks' => $data['instructor_remarks'],
            'percentage' => $data['percentage'],
        ];

        // Update the UserInstructorSession
        $session->update($sessionData);

        return self::success('UserInstructorSession updated successfully', ['data' => $session]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named UserInstructorSession
        $session = UserInstructorSession::where(['id' => $id])->first();

        if (!$session) {
            return $this->failure('UserInstructorSession not found');
        }

        $session->delete();

        return $this->success('UserInstructorSession deleted successfully', ['data' => ['id' => $id]]);
    }
}
