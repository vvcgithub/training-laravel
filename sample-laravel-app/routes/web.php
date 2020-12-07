<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\SampleController;

Route::get('/', function () {
    return view('welcome');
});

// This is where you register your controller methods and give it a route link name used by ajax request and hyperlinks
Route::get('department',[SampleController::class, 'index']);
Route::get('sample_get',[SampleController::class, 'sample_get']);
Route::post('sample_post1',[SampleController::class, 'sample_post_1']);
Route::post('sample_post2',[SampleController::class, 'sample_post_2']);
Route::get('departments',[SampleController::class, 'departments']);