<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;

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

Route::Post('/RequerimientoC' , [ContactController::Class,'create']);
Route::get('/RequerimientoR' , [ContactController::Class,'read']);
Route::Patch('/RequerimientoU' , [ContactController::Class,'update']);
Route::delete('/RequerimientoD' , [ContactController::Class,'delete']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});