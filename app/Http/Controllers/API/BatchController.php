<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named Batch
        $batches = Batch::all();

        return $this->success('Batches retrieved successfully', ['data' => $batches]);
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
            'name' => 'required|unique:batches,name|string|max:255',
            'user_id' => 'required|integer', // Adjust the validation rule as needed
            'instructor_id' => 'required|integer', // Adjust the validation rule as needed
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $batchData = [
            'name' => $data['name'],
            'user_id' => $data['user_id'],
            'instructor_id' => $data['instructor_id'],
            'description' => $data['description'],
        ];

        $batch = Batch::create($batchData);

        return self::success('Batch created successfully', ['data' => $batch]);
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
        $batch = Batch::where('id', $id)->first();

        if (!$batch) {
            return self::failure('Batch not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'instructor_id' => 'required|exists:instructors,id',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $batchData = [
            'name' => $data['name'],
            'user_id' => $data['user_id'],
            'instructor_id' => $data['instructor_id'],
            'description' => $data['description'],
        ];

        $batch->update($batchData);

        return self::success('Batch updated successfully', ['data' => $batch]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named Batch
        $batch = Batch::where(['id' => $id])->first();

        if (!$batch) {
            return $this->failure('Batch not found');
        }

        $batch->delete();

        return $this->success('Batch deleted successfully', ['data' => ['id' => $id]]);
    }
}
