<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TaskQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named TaskQuery
        $tasks = TaskQuery::all();

        return $this->success('Tasks retrieved successfully', ['data' => $tasks]);
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
            'user_id' => 'required|integer',
            'instructor_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'string',
            'instructor_reply' => 'string',
            'solution_link' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'user_id' => $data['user_id'],
            'instructor_id' => $data['instructor_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'instructor_reply' => $data['instructor_reply'],
            'solution_link' => $data['solution_link'],
        ];

        $taskQuery = TaskQuery::create($obj);

        return self::success('TaskQuery created successfully', ['data' => $taskQuery]);
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
        $taskQuery = TaskQuery::where('id', $id)->first();
        if (!$taskQuery) {
            return self::failure('TaskQuery not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'instructor_id' => 'required|exists:instructors,id',
            'title' => 'required|string|max:255',
            'description' => 'string',
            'instructor_reply' => 'string',
            'solution_link' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $updateData = [
            'user_id' => $data['user_id'],
            'instructor_id' => $data['instructor_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'instructor_reply' => $data['instructor_reply'],
            'solution_link' => $data['solution_link'],
        ];

        $taskQuery->update($updateData);

        return self::success('TaskQuery updated successfully', ['data' => $taskQuery]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named TaskQuery
        $taskQuery = TaskQuery::where(['id' => $id])->first();

        if (!$taskQuery) {
            return $this->failure('TaskQuery not found');
        }

        $taskQuery->delete();

        return $this->success('TaskQuery deleted successfully', ['data' => ['id' => $id]]);
    }
}
