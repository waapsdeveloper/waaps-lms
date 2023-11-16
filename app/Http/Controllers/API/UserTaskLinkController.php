<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserTaskLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTaskLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTaskLinks = UserTaskLink::all();
        return $this->success('UserTaskLinks retrieved successfully', ['data' => $userTaskLinks]);
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
        $data = $request->all();

        // Validate the request data
        $validator = Validator::make($data, [
            'user_id' => 'required',
            'task_id' => 'required',
            'link' => 'required|unique:user_task_links,link|string|max:255',
        ]);

        // If validation fails, return failure response
        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        // Create a new UserTaskLink instance
        $userTaskLink = UserTaskLink::create([
            'user_id' => $data['user_id'],
            'task_id' => $data['task_id'],
            'link' => $data['link'],
        ]);

        // Return success response with the created UserTaskLink
        return $this->success('UserTaskLink created successfully', ['data' => $userTaskLink]);
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
        $userTaskLink = UserTaskLink::find($id);

        if (!$userTaskLink) {
            return $this->failure('UserTaskLink not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'user_id' => 'required',
            'task_id' => 'required',
            'link' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $userTaskLink->update([
            'user_id' => $data['user_id'],
            'task_id' => $data['task_id'],
            'link' => $data['link'],
        ]);

        return $this->success('UserTaskLink updated successfully', ['data' => $userTaskLink]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userTaskLink = UserTaskLink::find($id);

        if (!$userTaskLink) {
            return $this->failure('UserTaskLink not found');
        }

        $userTaskLink->delete();

        return $this->success('UserTaskLink deleted successfully', ['data' => ['id' => $id]]);
    }
}
