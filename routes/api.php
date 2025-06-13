<?php

use App\Http\Controllers\Api\GetStartedController;
use App\Http\Controllers\Api\JobApplicationController;
use App\Http\Controllers\Api\LiveChatController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/get-started', [GetStartedController::class, 'getStarted']);
Route::post('/live-chat', [LiveChatController::class, 'chat']);
Route::post('/apply-for-job', [JobApplicationController::class, 'applyForJob']);
Route::post('/subscribe-to-newsletters', [GetStartedController::class, 'subscribeToNewsletter']);