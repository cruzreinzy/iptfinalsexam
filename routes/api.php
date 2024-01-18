<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
});

Route::get('/records', [RecordController::class, 'index'])->middleware('auth:sanctum')->name('records');
Route::get('/students', [StudentController::class, 'index'])->middleware('auth:sanctum')->name('students');
Route::get('/facilities', [FacilityController::class, 'index'])->middleware('auth:sanctum')->name('facilities');
