<?php

use App\Http\Controllers\API\UserTrackerController;
use App\Http\Controllers\API\UserTrackerTimeController;
use App\Http\Controllers\API\WorkingTimeScheduleController;
use App\Http\Controllers\API\WorkingTimeScheduleDayController;
use App\Http\Controllers\API\WorkingTimeScheduleTimeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});


Route::group(['prefix' => 'roles'], function () {
    // Index - List all roles
    Route::get('/', [RoleController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [RoleController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [RoleController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [RoleController::class, 'destroy']);

});

Route::group(['prefix' => 'users', 'middleware'=> ['auth:api']], function () {
    // Index - List all users
    Route::get('/', [UserController::class, 'index']);

    // Store - Store a newly created user in the database
    Route::post('/', [UserController::class, 'store']);

    // Update - Update the specified user in the database
    Route::post('/{id}', [UserController::class, 'update']);

    // Destroy - Remove the specified user from the database
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'user-tracker'], function () {
    // Index - List all roles
    Route::get('/', [UserTrackerController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTrackerController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTrackerController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTrackerController::class, 'destroy']);

});



Route::group(['prefix' => 'user-tracker-time'], function () {
    // Index - List all roles
    Route::get('/', [UserTrackerTimeController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTrackerTimeController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTrackerTimeController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTrackerTimeController::class, 'destroy']);

});



Route::group(['prefix' => 'working-time-shedule'], function () {
    // Index - List all roles
    Route::get('/', [WorkingTimeScheduleController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [WorkingTimeScheduleController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [WorkingTimeScheduleController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [WorkingTimeScheduleController::class, 'destroy']);

});





Route::group(['prefix' => 'working-time-shedule-day'], function () {
    // Index - List all roles
    Route::get('/', [WorkingTimeScheduleDayController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [WorkingTimeScheduleDayController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [WorkingTimeScheduleDayController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [WorkingTimeScheduleDayController::class, 'destroy']);

});




Route::group(['prefix' => 'working-time-shedule-time'], function () {
    // Index - List all roles
    Route::get('/', [WorkingTimeScheduleTimeController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [WorkingTimeScheduleTimeController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [WorkingTimeScheduleTimeController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [WorkingTimeScheduleTimeController::class, 'destroy']);

});


// Route::post('/register', 'App\Http\Controllers\API\AuthController@register');

// Route::get('/users', 'App\Http\Controllers\API\AuthController@getAllUsers');

// Route::post('/update/{userid}', 'App\Http\Controllers\API\AuthController@update');

// Route::post('/delete/{userid}', 'App\Http\Controllers\API\AuthController@delete');

