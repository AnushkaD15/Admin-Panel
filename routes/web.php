<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\VillageResidentsController;
use App\Http\Controllers\Complaints\InProgressComplaintsController;
use App\Http\Controllers\Complaints\CompletedComplaintsController;
use App\Http\Controllers\Complaints\NewComplaintsController;
use App\Http\Controllers\Complaints\PendingComplaintsController;
use app\Http\Controllers\AuthorityController;
use app\Http\Controllers\AuthorityWardsController;
use App\Http\Controllers\ComplaintDetailsController;
use App\Http\Controllers\WardsController;
use App\Http\Controllers\ComplaintTypeController;

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/','HomeController@index')->name('welcome');
Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::prefix('admin')-> group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

Route::prefix('admin')-> group(function(){
    Route::get('/addWards',[App\Http\Controllers\WardsController::class, 'index']);
});

Route::prefix('admin')-> group(function(){
    Route::get('/addComplaintType',[App\Http\Controllers\ComplaintTypeController::class, 'index']);
});

Route::prefix('admin')-> group(function(){
    Route::get('/addAuthority',[App\Http\Controllers\AuthorityController::class, 'index']);
});

Route::prefix('admin')-> group(function(){
    Route::get('/assignWardsToAuthority',[App\Http\Controllers\AuthorityWardsController::class, 'index']);
});

// Route::prefix('admin')-> group(function(){
//     Route::get('/villageResidents',[App\Http\Controllers\Admin\VillageResidentsController::class, 'villageIndex']);
// });

Route::get('/villageResidents',[App\Http\Controllers\Admin\VillageResidentsController::class,'index'])->name('villageResidents');

Route::get('/authorityRecords',[App\Http\Controllers\AuthorityController::class,'authorityRecords'])->name('authorityRecords');

Route::get('/complaintRecords',[App\Http\Controllers\ComplaintDetailsController::class,'complaintRecords'])->name('complaintRecords');

Route::prefix('complaints')-> group(function(){
    Route::get('/inProgressComplaints',[App\Http\Controllers\Complaints\InProgressComplaintsController::class,'index']);
});

Route::prefix('complaints')-> group(function(){
    Route::get('/completedComplaints',[App\Http\Controllers\Complaints\CompletedComplaintsController::class,'index']);
});

Route::prefix('complaints')-> group(function(){
    Route::get('/newComplaints',[App\Http\Controllers\Complaints\NewComplaintsController::class,'index']);
});

Route::prefix('complaints')-> group(function(){
    Route::get('/pendingComplaints',[App\Http\Controllers\Complaints\PendingComplaintsController::class,'index2']);
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post("addWards",[WardsController::class, 'addWard']);

Route::post("addComplaintType",[ComplaintTypeController::class, 'addComplaintType']);

Route::post("addAuthority",[AuthorityController::class, 'addAuthority']);

Route::post("assignWardsToAuthority",[AuthorityWardsController::class, 'assignWardsToAuthority']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::prefix('register')-> group(function(){
    Route::get('/register',[App\Http\Controllers\RegisterController::class, 'index']);
});

Route::resource('wards', WardsController::class);

Route::resource('complaintType', ComplaintTypeController::class);

Route::resource('authority', AuthorityController::class);

Route::resource('authorityWards', AuthorityWardsController::class);

Route::get('complaintType', [ComplaintTypeController::class, 'index']);

Route::get('authority', [AuthorityController::class, 'index']);


