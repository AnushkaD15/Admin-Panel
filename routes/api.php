<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\trialAPI;
use App\Http\Controllers\WardsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ComplaintDetailsController;
use App\Http\Controllers\AuthorityController;
use App\Http\Controllers\AuthorityComplaintController;
use App\Http\Controllers\AuthorityWardsController;


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
Route::get("SpecifiedWardDetails/{wid}", [WardsController::class, 'getSpecifiedWardDetailsByWID']);
Route::get("AuthorityData", [AuthorityController::class, 'getAuthorityData']);
Route::get("getAuthorityByCIDAndWID/{cid}/{wid}", [AuthorityComplaintController::class, 'getAuthorityByCIDAndWID']);
Route::get("getComplaintDetailsByAID/{aid}", [ComplaintDetailsController::class, 'getComplaintDetailsByAID']);

Route::post("addUser",[UsersController::class, 'addUser']);

Route::post("addComplaintDetails",[ComplaintDetailsController::class, 'addComplaintDetails']);
Route::post("addAuthority",[AuthorityController::class, 'addAuthority']);

Route::post("updateUserDetails/{uid}",[UsersController::class, 'updateUser']);

Route::get("getAuthority/{aid}", [AuthorityController::class, 'getAuthority']);