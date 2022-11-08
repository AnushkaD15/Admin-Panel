<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\trialAPI;
use App\Http\Controllers\WardsController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data", [trialAPI::class, 'getData']);

Route::get("Userdata", [UsersController::class, 'getUserData']);
Route::get("Warddata", [WardsController::class, 'getWardData']);
Route::get("SpecificUserdata", [UsersController::class, 'getSpecificUserByUserID']);
Route::get("SpecifiedWardDetails", [WardsController::class, 'getSpecifiedWardDetailsByWID']);

Route::post("addUser",[UsersController::class, 'addUser']);
Route::post("addWards",[WardsController::class, 'addWard']);
