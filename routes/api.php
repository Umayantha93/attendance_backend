<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
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

Route::post('/post-file', [AttendanceController::class, 'postFile']);
Route::get('/get-file', [AttendanceController::class, 'getFile']);

Route::get('/get-array', [ArrayController::class, 'arrayNumbers']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
