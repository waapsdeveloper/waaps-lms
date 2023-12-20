<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CampaignJoiner;

class CampaignJoinerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named CampaignJoiner
        $campaignJoiners = CampaignJoiner::all();

        return $this->success('CampaignJoiners retrieved successfully', ['data' => $campaignJoiners]);
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
            'campaign_id' => 'required|exists:campaigns,id',
            'user_id' => 'required|exists:users,id',
            'joined_at' => 'required|date', // Assuming 'joined_at' is a date field
            'status' => 'required',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Create a new campaign joiner
        $campaignJoiner = CampaignJoiner::create([
            'campaign_id' => $request->input('campaign_id'),
            'user_id' => $request->input('user_id'),
            'joined_at' => $request->input('joined_at'),
            'status' => $request->input('status'),
        ]);

        // Return success response
        return self::success('Campaign joiner created successfully', ['data' => $campaignJoiner]);
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
    public function updateCampaignJoiner(Request $request, string $id)
    {
        $campaignJoiner = CampaignJoinerModel::find($id);

        if (!$campaignJoiner) {
            return self::failure('CampaignJoiner not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'campaign_id' => 'required|integer',
            'user_id' => 'required|integer',
            'joined_at' => 'date', // Assuming 'joined_at' is a date field
            'status' => 'required|string',
            // Add more fields as needed
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $campaignJoinerData = [
            'campaign_id' => $data['campaign_id'],
            'user_id' => $data['user_id'],
            'joined_at' => $data['joined_at'],
            'status' => $data['status'],
            // Add more fields as needed
        ];

        $campaignJoiner->update($campaignJoinerData);

        return self::success('CampaignJoiner updated successfully', ['data' => $campaignJoiner]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the CampaignJoiner model by ID
        $campaignJoiner = CampaignJoiner::find($id);

        // Check if the CampaignJoiner exists
        if (!$campaignJoiner) {
            return $this->failure('CampaignJoiner not found');
        }

        // Delete the CampaignJoiner
        $campaignJoiner->delete();

        // Return success response
        return $this->success('CampaignJoiner deleted successfully', ['data' => ['id' => $id]]);
    }
}
