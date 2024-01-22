<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\StudentLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentLevel = StudentLevel::all();
        return $this->success('student levels retrieved successfully', ['data' => $studentLevel]);
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
        // Validation rules
        $validator = Validator::make($request->all(), [
            'student_id' => 'required', // You might need to adjust this validation based on your actual requirements
            'level_id' => 'required', // You might need to adjust this validation based on your actual requirements
        ]);

        // If validation fails, return failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create StudentLevel
        $studentLevel = StudentLevel::create([
            'student_id' => $request->input('student_id'),
            'level_id' => $request->input('level_id'),
        ]);

        // Return success response
        return $this->success('StudentLevel created successfully', ['data' => $studentLevel]);
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
        $studentLevel = StudentLevel::find($id);

        if (!$studentLevel) {
            return $this->failure('Student Level not found');
        }

        $validator = Validator::make($request->all(), [
            'student_id' => 'required', // You might need to adjust this validation based on your actual requirements
            'level_id' => 'required', // You might need to adjust this validation based on your actual requirements
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $data = $request->all();

        $studentLevel->update([
            'student_id' => $data['student_id'],
            'level_id' => $data['level_id'],
        ]);

        return $this->success('Student Level updated successfully', ['data' => $studentLevel]);
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $studentLevel = StudentLevel::find($id);

        if (!$studentLevel) {
            return $this->failure(' student level not found');
        }

        $studentLevel->delete();

        return $this->success(' student level deleted successfully', ['data' => ['id' => $id]]);
    }
}
