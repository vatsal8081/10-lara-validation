<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\SeccondController;
use App\Http\Controllers\ThirdController;
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


Route::post('first', [FirstController::class, 'firstReq']);
Route::post('seccond', [SeccondController::class, 'store']);
Route::get('third/{id}/{name}', [ThirdController::class, 'add']);
