<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('project', [\App\Http\Controllers\api\ProjectController::class,'index']);
Route::post('project', [\App\Http\Controllers\api\ProjectController::class,'store']);
Route::put('project/{id}', [\App\Http\Controllers\api\ProjectController::class,'update']);
Route::delete('project/{id}', [\App\Http\Controllers\api\ProjectController::class,'delete']);

Route::get('task', [\App\Http\Controllers\api\TaskController::class,'index']);
Route::post('task', [\App\Http\Controllers\api\TaskController::class,'store']);
Route::put('task/{id}', [\App\Http\Controllers\api\TaskController::class,'update']);
Route::delete('task/{id}', [\App\Http\Controllers\api\TaskController::class,'delete']);
