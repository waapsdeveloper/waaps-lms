<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserTaskNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTaskNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTaskNotes = UserTaskNote::all();
        return $this->success('User task notes retrieved successfully', ['data' => $userTaskNotes]);
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

        $validator = Validator::make($data, [
            'user_id' => 'required',
            'task_id' => 'required',
            'link' => 'required|unique:user_task_notes,link|string|max:255',
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $userTaskNote = UserTaskNote::create([
            'user_id' => $data['user_id'],
            'task_id' => $data['task_id'],
            'link' => $data['link'],
            // Add more fields as needed
        ]);

        return $this->success('UserTaskNote created successfully', ['data' => $userTaskNote]);
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
        $userTaskNote = UserTaskNote::find($id);

        if (!$userTaskNote) {
            return $this->failure('UserTaskNote not found');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'user_id' => 'required|integer',
            'task_id' => 'required|integer',
            'link' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $this->failure($validator->errors()->first());
        }

        $userTaskNote->update($data);

        return $this->success('UserTaskNote updated successfully', ['data' => $userTaskNote]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userTaskNote = UserTaskNote::find($id);

        if (!$userTaskNote) {
            return $this->failure('UserTaskNote not found');
        }

        $userTaskNote->delete();

        return $this->success('UserTaskNote deleted successfully', ['data' => ['id' => $id]]);
    }
}
