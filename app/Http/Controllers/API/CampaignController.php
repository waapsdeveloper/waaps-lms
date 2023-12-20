<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Campaign;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named Campaign
        $campaigns = Campaign::all();

        return $this->success('Campaigns retrieved successfully', ['data' => $campaigns]);
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
            'user_id' => 'required|integer',
            'project_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'status' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'budget' => 'required|numeric',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create a new campaign
        $campaign = Campaign::create([
            'user_id' => $request->input('user_id'),
            'project_id' => $request->input('project_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'image' => $request->input('image'),
            'status' => $request->input('status'),
            'capacity' => $request->input('capacity'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'budget' => $request->input('budget'),
        ]);

        // Return success response
        return $this->success('Campaign created successfully', ['data' => $campaign]);
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
    public function edit(
        $project_id,
        $title,
        $description,
        $type,
        $image,
        $status,
        $capacity,
        $start_time,
        $end_time,
        $budget
    ) {
        try {
            // Find the campaign based on the project_id
            $campaign = Campaign::find($project_id);

            // If the campaign is found, update the fields
            if ($campaign) {
                $campaign->title = $title;
                $campaign->description = $description;
                $campaign->type = $type;
                $campaign->image = $image;
                $campaign->status = $status;
                $campaign->capacity = $capacity;
                $campaign->start_time = $start_time;
                $campaign->end_time = $end_time;
                $campaign->budget = $budget;

                $campaign->save();

                return $this->success('Campaign updated successfully', ['data' => $campaign]);
            } else {
                return $this->error('Campaign not found', ['data' => null]);
            }
        } catch (\Exception $e) {
            // Handle any exceptions if needed
            return $this->error('Error updating campaign', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $campaign_id)
    {
        $campaign = Campaign::where('id', $campaign_id)->first();

        if (!$campaign) {
            return $this->failure('Campaign not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'title' => 'string|max:255',
            'description' => 'string',
            'type' => 'string',
            'image' => 'string',
            'status' => 'string',
            'capacity' => 'integer',
            'start_time' => 'date',
            'end_time' => 'date',
            'budget' => 'numeric',
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $campaignData = [
            'title' => $data['title'],
            'description' => $data['description'],
            'type' => $data['type'],
            'image' => $data['image'],
            'status' => $data['status'],
            'capacity' => $data['capacity'],
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'budget' => $data['budget'],
            // Add other fields as needed
        ];

        $campaign->update($campaignData);

        return $this->success('Campaign updated successfully', ['data' => $campaign]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $campaign = Campaign::find($id);

        if (!$campaign) {
            return $this->failure('Campaign not found');
        }

        $campaign->delete();

        return $this->success('Campaign deleted successfully', ['data' => ['id' => $id]]);
    }
}
