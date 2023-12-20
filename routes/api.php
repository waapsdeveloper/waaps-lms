<?php

use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\TaskLinkController;
use App\Http\Controllers\API\UserSelectedTechnologyController;
use App\Http\Controllers\API\UserTaskController;
use App\Http\Controllers\API\UserTaskLinkController;
use App\Http\Controllers\API\UserTaskNoteController;
use App\Http\Controllers\API\UserTermController;
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
use App\Http\Controllers\API\BatchController;
use App\Http\Controllers\API\BatchStudentController;
use App\Http\Controllers\API\BatchTrainingController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\ResultController;
use App\Http\Controllers\API\TaskQueryController;
use App\Http\Controllers\API\TechnologyController;
use App\Http\Controllers\API\TrainingController;
use App\Http\Controllers\API\TrainingGroupController;
use App\Http\Controllers\API\TrainingGroupLevelController;
use App\Http\Controllers\API\TrainingGroupLevelTaskController;
use App\Http\Controllers\API\UserInstructorSessionController;
use App\Http\Controllers\API\UserTaskSubmissionController;
use App\Http\Controllers\API\UserTaskTrackerController;
use App\Http\Controllers\API\UserTaskTrackerTimeController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\CampaignController;

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

    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/profile-details', [UserController::class, 'profileDetails']);
    Route::post('/profile-points-update', [UserController::class, 'profilePointsUpdate']);



    Route::get('/accept-terms', [UserController::class, 'getAcceptTerms']);
    Route::post('/accept-terms', [UserController::class, 'acceptTerms']);





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



Route::group(['prefix' => 'user-term'], function () {
    // Index - List all roles
    Route::get('/', [ UserTermController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTermController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTermController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTermController::class, 'destroy']);

});


Route::group(['prefix' => 'Technology'], function () {
    // Index - List all roles
    Route::get('/', [TechnologyController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [TechnologyController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [TechnologyController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [TechnologyController::class, 'destroy']);

});


Route::group(['prefix' => 'user-selected-technology'], function () {
    // Index - List all roles
    Route::get('/', [UserSelectedTechnologyController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserSelectedTechnologyController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserSelectedTechnologyController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserSelectedTechnologyController::class, 'destroy']);

});



Route::group(['prefix' => 'task'], function () {
    // Index - List all roles
    Route::get('/', [TaskController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [TaskController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [TaskController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [TaskController::class, 'destroy']);

});


Route::group(['prefix' => 'task-link'], function () {
    // Index - List all roles
    Route::get('/', [TaskLinkController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [TaskLinkController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [TaskLinkController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [TaskLinkController::class, 'destroy']);

});



Route::group(['prefix' => 'user-task'], function () {
    // Index - List all roles
    Route::get('/', [UserTaskController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTaskController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTaskController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTaskController::class, 'destroy']);

});



Route::group(['prefix' => 'user-task-note'], function () {
    // Index - List all roles
    Route::get('/', [UserTaskNoteController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTaskNoteController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTaskNoteController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTaskNoteController::class, 'destroy']);

});




Route::group(['prefix' => 'user-task-link'], function () {
    // Index - List all roles
    Route::get('/', [UserTaskLinkController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTaskLinkController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTaskLinkController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTaskLinkController::class, 'destroy']);

});


Route::group(['prefix' => 'user-task-tracker'], function () {
    // Index - List all roles
    Route::get('/', [UserTaskTrackerController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTaskTrackerController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTaskTrackerController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTaskTrackerController::class, 'destroy']);

});


Route::group(['prefix' => 'user-task-tracker-time'], function () {
    // Index - List all roles
    Route::get('/', [UserTaskTrackerTimeController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTaskTrackerTimeController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTaskTrackerTimeController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTaskTrackerTimeController::class, 'destroy']);

});


Route::group(['prefix' => 'training'], function () {
    // Index - List all roles
    Route::get('/', [TrainingController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [TrainingController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [TrainingController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [TrainingController::class, 'destroy']);

});



Route::group(['prefix' => 'training-group'], function () {
    // Index - List all roles
    Route::get('/', [TrainingGroupController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [TrainingGroupController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [TrainingGroupController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [TrainingGroupController::class, 'destroy']);

});


Route::group(['prefix' => 'training-group-level'], function () {
    // Index - List all roles
    Route::get('/', [TrainingGroupLevelController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [TrainingGroupLevelController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [TrainingGroupLevelController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [TrainingGroupLevelController::class, 'destroy']);

});


Route::group(['prefix' => 'training-group-level-task'], function () {
    // Index - List all roles
    Route::get('/', [TrainingGroupLevelTaskController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [TrainingGroupLevelTaskController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [TrainingGroupLevelTaskController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [TrainingGroupLevelTaskController::class, 'destroy']);

});


// Route::group(['prefix' => 'profile'], function () {
//     // Index - List all roles
//     Route::get('/', [ProfileController::class, 'index']);

//     // Store - Store a newly created role in the database
//     Route::post('/', [ProfileController::class, 'store']);

//     // Update - Update the specified role in the database
//     Route::post('/{id}', [ProfileController::class, 'update']);

//     // Destroy - Remove the specified role from the database
//     Route::delete('/{id}', [ProfileController::class, 'destroy']);

// });


Route::group(['prefix' => 'batch'], function () {
    // Index - List all roles
    Route::get('/', [BatchController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [BatchController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [BatchController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [BatchController::class, 'destroy']);

});


Route::group(['prefix' => 'batch-student'], function () {
    // Index - List all roles
    Route::get('/', [BatchStudentController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [BatchStudentController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [BatchStudentController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [BatchStudentController::class, 'destroy']);

});


Route::group(['prefix' => 'batch-training'], function () {
    // Index - List all roles
    Route::get('/', [BatchTrainingController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [BatchTrainingController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [BatchTrainingController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [BatchTrainingController::class, 'destroy']);

});


Route::group(['prefix' => 'user-task-submission'], function () {
    // Index - List all roles
    Route::get('/', [UserTaskSubmissionController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserTaskSubmissionController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserTaskSubmissionController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserTaskSubmissionController::class, 'destroy']);

});


Route::group(['prefix' => 'user-instructor-session'], function () {
    // Index - List all roles
    Route::get('/', [UserInstructorSessionController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [UserInstructorSessionController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [UserInstructorSessionController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [UserInstructorSessionController::class, 'destroy']);

});


Route::group(['prefix' => 'task-query'], function () {
    // Index - List all roles
    Route::get('/', [TaskQueryController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [TaskQueryController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [TaskQueryController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [TaskQueryController::class, 'destroy']);

});


Route::group(['prefix' => 'result'], function () {
    // Index - List all roles
    Route::get('/', [ResultController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [ResultController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [ResultController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [ResultController::class, 'destroy']);

});


Route::group(['prefix' => 'projects'], function () {
    // Index - List all roles
    Route::get('/', [ProjectController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [ProjectController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [ProjectController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [ProjectController::class, 'destroy']);

});



Route::group(['prefix' => 'campaigns'], function () {
    // Index - List all roles
    Route::get('/', [CampaignController::class, 'index']);

    // Store - Store a newly created role in the database
    Route::post('/', [CampaignController::class, 'store']);

    // Update - Update the specified role in the database
    Route::post('/{id}', [CampaignController::class, 'update']);

    // Destroy - Remove the specified role from the database
    Route::delete('/{id}', [CampaignController::class, 'destroy']);

});
// Route::post('/register', 'App\Http\Controllers\API\AuthController@register');

// Route::get('/users', 'App\Http\Controllers\API\AuthController@getAllUsers');

// Route::post('/update/{userid}', 'App\Http\Controllers\API\AuthController@update');

// Route::post('/delete/{userid}', 'App\Http\Controllers\API\AuthController@delete');

