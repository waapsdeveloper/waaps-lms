<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming you have a model named Project
        $projects = Project::all();

        return $this->success('Projects retrieved successfully', ['data' => $projects]);
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
            'title' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id', // Assuming users table has an 'id' column
            'description' => 'required|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        // Create a new project
        $project = Project::create([
            'title' => $request->input('title'),
            'user_id' => $request->input('user_id'),
            'description' => $request->input('description'),
        ]);

        // Return success response
        return self::success('Project created successfully', ['data' => $project]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id);

        if (!$project) {
            return self::failure('Project not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'user_id' => 'required|integer', // You may adjust the validation rules as needed
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $projectData = [
            'title' => $data['title'],
            'user_id' => $data['user_id'],
            'description' => $data['description'],
            // Add more fields as needed
        ];

        $project->update($projectData);

        return self::success('Project updated successfully', ['data' => $project]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Assuming you have a model named Project
        $project = Project::find($id);

        if (!$project) {
            return $this->failure('Project not found');
        }

        $project->delete();

        return $this->success('Project deleted successfully', ['data' => ['id' => $id]]);
    }

}
