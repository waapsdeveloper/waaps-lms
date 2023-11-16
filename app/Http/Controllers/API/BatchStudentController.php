<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BatchStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BatchStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named BatchStudent
        $batchStudents = BatchStudent::all();

        return $this->success('BatchStudents retrieved successfully', ['data' => $batchStudents]);
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
            'batch_id' => 'required|integer', // Adjust validation rules as needed
            'user_id' => 'required|integer', // Adjust validation rules as needed
            // Add other validation rules if needed
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Create an array with the data
        $data = [
            'batch_id' => $request->input('batch_id'),
            'user_id' => $request->input('user_id'),
            // Add other fields if needed
        ];

        try {
            // Create a new BatchStudent instance and save it to the database
            $batchStudent = BatchStudent::create($data);

            // Return success response
            return self::success('BatchStudent created successfully', ['data' => $batchStudent]);
        } catch (\Exception $e) {
            // Return failure response if an exception occurs
            return self::failure('Error creating BatchStudent');
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
        $batchStudent = BatchStudent::where('id', $id)->first();

        if (!$batchStudent) {
            return self::failure('BatchStudent not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'batch_id' => 'required|exists:batches,id',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $batchStudentData = [
            'batch_id' => $data['batch_id'],
            'user_id' => $data['user_id'],
            // Add other fields as needed
        ];

        $batchStudent->update($batchStudentData);

        return self::success('BatchStudent updated successfully', ['data' => $batchStudent]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named BatchStudent
        $batchStudent = BatchStudent::where(['id' => $id])->first();

        if (!$batchStudent) {
            return $this->failure('BatchStudent not found');
        }

        $batchStudent->delete();

        return $this->success('BatchStudent deleted successfully', ['data' => ['id' => $id]]);
    }
}
