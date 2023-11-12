<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'roles'], function () {
    // Index - List all roles
    Route::get('/', [RoleController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [RoleController::class, 'store']);

    // Update - Update the specified role in the database
    Route::put('/{role}', [RoleController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{role}', [RoleController::class, 'destroy']);

});

Route::group(['prefix' => 'users'], function () {
    // Index - List all users
    Route::get('/', [UserController::class, 'index']);

    // Store - Store a newly created user in the database
    Route::post('/', [UserController::class, 'store']);

    // Update - Update the specified user in the database
    Route::put('/{user}', [UserController::class, 'update']);

    // Destroy - Remove the specified user from the database
    Route::delete('/{user}', [UserController::class, 'destroy']);
});



// Route::post('/register', 'App\Http\Controllers\API\AuthController@register');

// Route::get('/users', 'App\Http\Controllers\API\AuthController@getAllUsers');

// Route::post('/update/{userid}', 'App\Http\Controllers\API\AuthController@update');

// Route::post('/delete/{userid}', 'App\Http\Controllers\API\AuthController@delete');

