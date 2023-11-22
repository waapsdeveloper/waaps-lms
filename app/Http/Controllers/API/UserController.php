<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\UserTerm;
use Illuminate\Support\Facades\Validator;
use Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return self::success('Users retrieved successfully', ['data' => $users]);
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
        //
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role_id' => $data['role_id'],
        ];

        $user = User::create($obj);
        $token = $user->createToken('WaapsLms')->accessToken;


        $response = [
            'token' => $token,
            'user' => $user,
        ];
        return self::success('User created successfully', ['data' => $response]);
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
        //

        $data = $request->all();

        $user = User::where('id', $id)->first();
        if (!$user) {
            return self::failure('User not found');
        }

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }


        $user = Auth::user();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->role_id = $data['role_id'];

        $user->save();


        $response = [
            'user' => $user,
        ];
        return self::success('User created successfully', ['data' => $response]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::where(['id' => $id])->first();

        // Check if the user was found
        if (!$user) {
            return self::failure('User not found');
        }

        // Delete the user
        $user->delete();

        // Return success response
        return self::success('User deleted successfully', ['data' => ['id' => $id]]);
    }

    // Custom function
    public function profile(Request $request){

        $authUser = Auth::user();
        $profile = Profile::where(['user_id' => $authUser->id])->first();
        $authUser['profile'] = $profile;

        return self::success('User Profile', ['data' => [$authUser]]);
    }

    public function acceptTerms(Request $request) {

        $data = $request->all();
        $authUser = Auth::user();

        $validator = Validator::make($data, [
            'terms_accepted' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $terms = UserTerm::updateOrCreate(
            ['user_id' => $authUser->id],
            ['is_accepted' => $data['terms_accepted'] ]
        );

        return self::success('User Terms updated', ['data' => $terms ]);

    }

    public function getAcceptTerms(){

        $authUser = Auth::user();
        $terms = UserTerm::where(['user_id' => $authUser->id ])->first();
        return self::success('User Terms updated', ['data' => $terms ]);
    }

}
