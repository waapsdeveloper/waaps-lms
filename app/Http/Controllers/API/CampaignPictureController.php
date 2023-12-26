<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CampaignPicture;

class CampaignPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named CampaignPicture
        $campaignPictures = CampaignPicture::all();

        return $this->success('Campaign pictures retrieved successfully', ['data' => $campaignPictures]);
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
        'campaign_id' => 'required|exists:campaigns,id', // Assuming campaigns table has an 'id' column
        'picture' => 'required|string|max:255', // Assuming picture is a string (file name without extension)
    ]);

    // Check for validation errors
    if ($validator->fails()) {
        return self::failure($validator->errors()->first());
    }

    // Create a new CampaignPicture
    $campaignPicture = CampaignPicture::create([
        'campaign_id' => $request->input('campaign_id'),
        'picture' => $request->input('picture'),
    ]);

    // Return success response
    return self::success('Campaign picture created successfully', ['data' => $campaignPicture]);
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
        $campaignPicture = CampaignPicture::find($id);

        if (!$campaignPicture) {
            return self::failure('Campaign picture not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'campaign_id' => 'required|integer',
            'picture' => 'required|string', // Adjust validation rules as needed
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $pictureData = [
            'campaign_id' => $data['campaign_id'],
            'picture' => $data['picture'],
            // Add more fields as needed
        ];

        $campaignPicture->update($pictureData);

        return self::success('Campaign picture updated successfully', ['data' => $campaignPicture]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named CampaignPicture
        $picture = CampaignPicture::find($id);

        if (!$picture) {
            return $this->failure('Picture not found');
        }

        $picture->delete();

        return $this->success('Picture deleted successfully', ['data' => ['id' => $id]]);
    }
}
