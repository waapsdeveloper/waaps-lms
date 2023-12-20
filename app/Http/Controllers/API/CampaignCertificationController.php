<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CampaignCertification;

class CampaignCertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named CampaignCertification
        $campaignCertifications = CampaignCertification::all();

        return $this->success('Campaign certifications retrieved successfully', ['data' => $campaignCertifications]);
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
        // dd("hello");
        // Validation rules
        $validator = Validator::make($request->all(), [
            'campaign_id' => 'required|exists:campaigns,id',
            'user_id' => 'required|exists:users,id',
            'result_id' => 'required|exists:results,id',
            'certificate_id' => 'required|exists:certificates,id',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Create a new campaign certification
        $campaignCertification = CampaignCertification::create([
            'campaign_id' => $request->input('campaign_id'),
            'user_id' => $request->input('user_id'),
            'result_id' => $request->input('result_id'),
            'certificate_id' => $request->input('certificate_id'),
        ]);

        // Return success response
        return self::success('Campaign certification created successfully', ['data' => $campaignCertification]);
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
        $certification = CampaignCertification::find($id);

        if (!$certification) {
            return self::failure('Certification not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'campaign_id' => 'required|integer',
            'user_id' => 'required|integer',
            'result_id' => 'required|integer',
            'certificate_id' => 'required|integer',
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $certificationData = [
            'campaign_id' => $data['campaign_id'],
            'user_id' => $data['user_id'],
            'result_id' => $data['result_id'],
            'certificate_id' => $data['certificate_id'],
            // Add more fields as needed
        ];

        $certification->update($certificationData);

        return self::success('Certification updated successfully', ['data' => $certification]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named CampaignCertification
        $certification = CampaignCertification::find($id);

        if (!$certification) {
            return $this->failure('Certification not found');
        }

        $certification->delete();

        return $this->success('Certification deleted successfully', ['data' => ['id' => $id]]);
    }
}
