<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserTerm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTerms = UserTerm::all();
        return $this->success('UserTerms retrieved successfully', ['data' => $userTerms]);
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
        // Validate the request
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'term_link' => 'required',
            'is_accepted' => 'required|boolean',
        ]);

        // If validation fails, return failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create a new UserTerm instance
        $userTerm = UserTerm::create([
            'user_id' => $request->input('user_id'),
            'term_link' => $request->input('term_link'),
            'is_accepted' => $request->input('is_accepted'),
        ]);

        // Return success response
        return $this->success('UserTerm created successfully', ['data' => $userTerm]);
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
        $userTerm = UserTerm::find($id);

        if (!$userTerm) {
            return $this->failure('UserTerm not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'user_id' => 'required',
            'term_link' => 'required|string|max:255',
            'is_accepted' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $userTerm->update([
            'user_id' => $data['user_id'],
            'term_link' => $data['term_link'],
            'is_accepted' => $data['is_accepted'],
        ]);

        return $this->success('UserTerm updated successfully', ['data' => $userTerm]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userTerm = UserTerm::find($id);

        if (!$userTerm) {
            return $this->failure('UserTerm not found');
        }

        $userTerm->delete();

        return $this->success('UserTerm deleted successfully', ['data' => ['id' => $id]]);
    }
}
