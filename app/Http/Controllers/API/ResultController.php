<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Result;
class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named Result
        $results = Result::all();

        return $this->success('Results retrieved successfully', ['data' => $results]);
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
            'user_id' => 'required|exists:users,id',
            'instructor_id' => 'required|exists:instructors,id',
            'training_id' => 'required|exists:trainings,id',
            'title' => 'required|string|max:255',
            'description' => 'string',
            'task_percentage' => 'required|numeric|min:0|max:100',
            'test_percentage' => 'required|numeric|min:0|max:100',
            'average_percentage' => 'required|numeric|min:0|max:100',
            'remarks' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $resultData = [
            'user_id' => $data['user_id'],
            'instructor_id' => $data['instructor_id'],
            'training_id' => $data['training_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'task_percentage' => $data['task_percentage'],
            'test_percentage' => $data['test_percentage'],
            'average_percentage' => $data['average_percentage'],
            'remarks' => $data['remarks'],
        ];

        $result = Result::create($resultData);

        return self::success('Result created successfully', ['data' => $result]);
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
        $result = Result::find($id);

        if (!$result) {
            return self::failure('Result not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'exists:users,id',
            'instructor_id' => 'exists:instructors,id',
            'training_id' => 'exists:trainings,id',
            'title' => 'string|max:255',
            'description' => 'string',
            'task_percentage' => 'numeric|min:0|max:100',
            'test_percentage' => 'numeric|min:0|max:100',
            'average_percentage' => 'numeric|min:0|max:100',
            'remarks' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $resultData = [
            'user_id' => $data['user_id'] ?? $result->user_id,
            'instructor_id' => $data['instructor_id'] ?? $result->instructor_id,
            'training_id' => $data['training_id'] ?? $result->training_id,
            'title' => $data['title'] ?? $result->title,
            'description' => $data['description'] ?? $result->description,
            'task_percentage' => $data['task_percentage'] ?? $result->task_percentage,
            'test_percentage' => $data['test_percentage'] ?? $result->test_percentage,
            'average_percentage' => $data['average_percentage'] ?? $result->average_percentage,
            'remarks' => $data['remarks'] ?? $result->remarks,
        ];

        $result->update($resultData);

        return self::success('Result updated successfully', ['data' => $result]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named Result
        $result = Result::where(['id' => $id])->first();

        if (!$result) {
            return $this->failure('Result not found');
        }

        $result->delete();

        return $this->success('Result deleted successfully', ['data' => ['id' => $id]]);
    }
}
