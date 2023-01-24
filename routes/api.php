<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\SupportsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    return response()->json(['success' => true], 200);
});


Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/courses/{id}', [CoursesController::class, 'show']);

Route::get('/lessons', [LessonsController::class, 'index']);
Route::get('/lessons/{id}', [LessonsController::class, 'show']);

Route::get('/supports', [SupportsController::class, 'index']);
Route::post('/supports', [SupportsController::class, 'storage']);

Route::get('/supports/{id}', [SupportsController::class, 'show']);

Route::get('/lessons/{id}/supports', [SupportsController::class, 'show']);
