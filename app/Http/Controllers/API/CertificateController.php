<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Certificate;


class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named Certificate
        $certificates = Certificate::all();

        return $this->success('Certificates retrieved successfully', ['data' => $certificates]);
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
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' => 'required|string', // Adjust validation rules accordingly
            'certified_by' => 'required|string|max:255',
            'signature' => 'required|string|max:255',
            'completed_hours' => 'required|numeric',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Create a new certificate
        $certificate = Certificate::create([
            'user_id' => $request->input('user_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'certified_by' => $request->input('certified_by'),
            'signature' => $request->input('signature'),
            'completed_hours' => $request->input('completed_hours'),
        ]);

        // Return success response
        return self::success('Certificate created successfully', ['data' => $certificate]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $certificate = Certificate::find($id);

        if (!$certificate) {
            return self::failure('Certificate not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'user_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'certified_by' => 'required|string',
            'signature' => 'required|string',
            'completed_hours' => 'required|numeric',
            // Add more fields as needed
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $certificateData = [
            'user_id' => $data['user_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'certified_by' => $data['certified_by'],
            'signature' => $data['signature'],
            'completed_hours' => $data['completed_hours'],
            // Add more fields as needed
        ];

        $certificate->update($certificateData);

        return self::success('Certificate updated successfully', ['data' => $certificate]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named Certificate
        $certificate = Certificate::find($id);

        if (!$certificate) {
            return $this->failure('Certificate not found');
        }

        $certificate->delete();

        return $this->success('Certificate deleted successfully', ['data' => ['id' => $id]]);
    }
}
