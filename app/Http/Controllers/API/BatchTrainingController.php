<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BatchTraining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BatchTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named BatchTraining
        $batchTrainings = BatchTraining::all();

        return $this->success('BatchTrainings retrieved successfully', ['data' => $batchTrainings]);
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
            'batch_id' => 'required',
            'training_id' => 'required',
            // Add other validation rules as needed
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'batch_id' => $data['batch_id'],
            'training_id' => $data['training_id'],
            // Add other fields as needed
        ];

        $batchTraining = BatchTraining::create($obj);

        return self::success('BatchTraining created successfully', ['data' => $batchTraining]);
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
        $batchTraining = BatchTraining::find($id);

        if (!$batchTraining) {
            return self::failure('BatchTraining not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'batch_id' => 'required|exists:batches,id',
            'training_id' => 'required|exists:trainings,id',
            // Add other validation rules for additional fields as needed
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $batchTrainingData = [
            'batch_id' => $data['batch_id'],
            'training_id' => $data['training_id'],
            // Include other fields as needed
        ];

        $batchTraining->update($batchTrainingData);

        return self::success('BatchTraining updated successfully', ['data' => $batchTraining]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named BatchTraining
        $batchTraining = BatchTraining::where(['id' => $id])->first();

        if (!$batchTraining) {
            return $this->failure('BatchTraining not found');
        }

        $batchTraining->delete();

        return $this->success('BatchTraining deleted successfully', ['data' => ['id' => $id]]);
    }
}
