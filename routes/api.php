<?php

use App\Http\Controllers\UserController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::group(['prefix' => 'user'], function () {
    Route::post('/', [UserController::class, '__create']);
    Route::get('/', [UserController::class, '__list']);
    Route::get('/{id}', [UserController::class, '__find']);
    Route::put('/{id}', [UserController::class, '__update']);
    Route::delete('/{id}', [UserController::class, '__delete']);
});
