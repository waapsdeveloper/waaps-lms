<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Training;
class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainings = Training::all();
        return $this->success('Trainings retrieved successfully', ['data' => $trainings]);
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
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Your logic to create a Training goes here
        // For example, if Training is a model, you can use create method
        $training = Training::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Return a success response with the created Training
        return $this->success('Training created successfully', ['data' => $training]);
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
        // Find the Training by ID
        $training = Training::where('id', $id)->first();

        // If the Training is not found, return a failure response
        if (!$training) {
            return $this->failure('Training not found');
        }

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'string',
        ]);

        // If validation fails, return a failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Update the Training with the new data
        $data = $request->all();
        $training->update([
            'name' => $data['name'],
            'description' => $data['description'],
        ]);

        // Return a success response with the updated Training
        return $this->success('Training updated successfully', ['data' => $training]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $training = Training::find($id);

        if (!$training) {
            return $this->failure('Training not found');
        }

        $training->delete();

        return $this->success('Training deleted successfully', ['data' => ['id' => $id]]);
    }
}
