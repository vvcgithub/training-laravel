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

use App\Http\Controllers\SampleController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// This is where you register your controller methods and give it a route API link name used by ajax and mobile request
Route::get("departments", [SampleController::class, 'departments_api']);