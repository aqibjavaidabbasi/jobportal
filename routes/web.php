<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\Auth\HomeController; //new
use App\Http\Controllers\jobsboardController;
use App\Http\Controllers\userdashboardController;
use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\ScholarshipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/charts', function () {
//     return view('layouts.charts');
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\userController::class, 'index'])->name('layouts.index')->middleware(['auth', 'isadmin']);
Route::get("user/home", [App\Http\Controllers\userdashboardController::class, 'index'])->name('user.home'); // user dashboard


Route::view("/charts", 'layouts.charts');
Route::view("/typography", 'layouts.typography');
Route::view("/tables", 'layouts.tables');
Route::view("/About_US", 'layouts.About_Us');
Route::view("/scholarships", 'layouts.scholar');

// Route::resource("/home", userController::class);
Route::resource("/user", userController::class);
Route::get("/edit-user/{id}", [userController::class, 'edit']);
Route::patch('update-user', [userController::class, 'update']);
Route::delete('deleteuser', [userController::class, 'destroy']);
Route::get("/view-user/{id}", [userController::class, 'show']);
Route::delete("/delete-selected-user", [userController::class, 'checkdelete']);  // check box delete

// // // // jobs board

Route::get('/jobs_board', [App\Http\Controllers\jobsboardController::class, 'index'])->name('jobs_board'); // job portal home page
Route::resource("/job", jobsboardController::class); // job portal crud
Route::get('/add-job', [App\Http\Controllers\jobsboardController::class, 'create'])->name('addjob'); // job portal create
Route::delete('delete-job', [jobsboardController::class, 'destroy']);
Route::get("/edit-job/{id}", [jobsboardController::class, 'edit']);
Route::patch('/update-job', [jobsboardController::class, 'update']);

Route::get("/view-job/{id}", [jobsboardController::class, 'show']);
Route::delete("/delete-selected-job", [jobsboardController::class, 'checkdelete']);  // check box delete


// // // // Company Info

Route::get('/About_US', [AboutCompanyController::class, 'index']);
Route::get('/Add_Info', [AboutCompanyController::class, 'create']);
Route::post('/Insert_data', [AboutCompanyController::class, 'store']);
Route::get('/view-info/{id}', [AboutCompanyController::class, 'show']);

Route::get("/edit-info/{id}", [AboutCompanyController::class, 'edit']);
Route::patch('/update-info', [AboutCompanyController::class, 'update']);
Route::delete('delete-info', [AboutCompanyController::class, 'destroy']);
Route::delete("/delete-selected-info", [AboutCompanyController::class, 'checkdelete']);  // check box delete


// // // // Scholarships

Route::get('/scholarships', [ScholarshipController::class, 'index']);
Route::get('/Add_scholarships', [ScholarshipController::class, 'create']);
Route::post('/Insert_data', [ScholarshipController::class, 'store']);
Route::get('/view_data/{id}', [ScholarshipController::class, 'show']);

Route::get("/edit-data/{id}", [ScholarshipController::class, 'edit']);
Route::patch('/update-data', [ScholarshipController::class, 'update']);
Route::delete('delete-data', [ScholarshipController::class, 'destroy']);
Route::delete("/delete-selected-data", [ScholarshipController::class, 'checkdelete']);  // check box delete
