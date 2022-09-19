<?php

use App\Http\Controllers\Attendance\AttendanceController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Import attendance excel
Route::post('import/excel', [AttendanceController::class, "createAttendance"]);
//Employee attendance details
Route::get('get/employee-details', [AttendanceController::class, "getAttendance"]);
//List of attendance
Route::get('attendance/list', [AttendanceController::class, "attendanceList"]);

//get duplicate values of array
Route::post('get/duplicate-value', [IndexController::class, "getDuplicateValues"]);
//array group by value
Route::post('array/group-by-owners', [IndexController::class, "groupByOwners"]);


