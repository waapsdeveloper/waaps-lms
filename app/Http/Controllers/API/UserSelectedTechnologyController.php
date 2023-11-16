<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserSelectedTechnology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserSelectedTechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userSelectedTechnologies = UserSelectedTechnology::all();
        return $this->success('User selected technologies retrieved successfully', ['data' => $userSelectedTechnologies]);
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
            'user_id' => 'required|integer',
            'technology_id' => 'required|integer|unique:user_selected_technologies,technology_id,NULL,id,user_id,' . $request->user_id,
            // Add any other validation rules as needed
        ]);

        // If validation fails, return failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create a new UserSelectedTechnology instance
        $userSelectedTechnology = UserSelectedTechnology::create([
            'user_id' => $request->user_id,
            'technology_id' => $request->technology_id,
            // Add any other fields you have in the model
        ]);

        // Return success response
        return $this->success('UserSelectedTechnology created successfully', ['data' => $userSelectedTechnology]);
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
    public function update(Request $request, $user_id, $technology_id)
    {
        $userSelectedTechnology = UserSelectedTechnology::where('user_id', $user_id)
            ->where('technology_id', $technology_id)
            ->first();

        if (!$userSelectedTechnology) {
            return $this->failure('UserSelectedTechnology not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'some_field' => 'required|string|max:255', // Replace 'some_field' with the actual field name you want to update
            'another_field' => 'string',
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $updateData = [
            'some_field' => $data['some_field'],
            'another_field' => $data['another_field'],
        ];

        $userSelectedTechnology->update($updateData);

        return $this->success('UserSelectedTechnology updated successfully', ['data' => $userSelectedTechnology]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userSelectedTechnology = UserSelectedTechnology::find($id);

        if (!$userSelectedTechnology) {
            return $this->failure('UserSelectedTechnology not found');
        }

        $userSelectedTechnology->delete();

        return $this->success('UserSelectedTechnology deleted successfully', ['data' => ['id' => $id]]);
    }
}
