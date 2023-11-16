<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named Profile
        $profiles = Profile::all();

        return $this->success('Profiles retrieved successfully', ['data' => $profiles]);
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
        'cv_link' => 'required|string|max:255',
        'nic' => 'required|unique:profiles,nic|string|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        'qualification' => 'required|string|max:255',
    ]);

    // Check for validation errors
    if ($validator->fails()) {
        return self::failure($validator->errors()->first());
    }

    // Create a new profile
    $profile = Profile::create([
        'cv_link' => $request->input('cv_link'),
        'nic' => $request->input('nic'),
        'phone' => $request->input('phone'),
        'address' => $request->input('address'),
        'qualification' => $request->input('qualification'),
    ]);

    // Return success response
    return self::success('Profile created successfully', ['data' => $profile]);
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
        $profile = Profile::where('id', $id)->first();
        if (!$profile) {
            return self::failure('Profile not found');
        }

        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'cv_link' => 'string',
            'nic' => 'string|max:255',
            'phone' => 'string|max:255',
            'address' => 'string',
            'qualification' => 'string|max:255',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $profileData = [
            'cv_link' => $data['cv_link'],
            'nic' => $data['nic'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'qualification' => $data['qualification'],
        ];

        $profile->update($profileData);

        return self::success('Profile updated successfully', ['data' => $profile]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named Profile
        $profile = Profile::where(['id' => $id])->first();

        if (!$profile) {
            return $this->failure('Profile not found');
        }

        $profile->delete();

        return $this->success('Profile deleted successfully', ['data' => ['id' => $id]]);
    }
}
