<?php

use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\UserController;
use Modules\Admin\Http\Controllers\VacancyController;

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

Route::prefix('/admin')->group(function(){

    Route::apiResource('/categories','CategoryController');

    Route::apiResource('/jobTypes','JobTypeController');


    Route::get('/users',[UserController::class,'index']);
    Route::get('/users/{id}',[UserController::class,'show']);
    Route::put('/users/{id}',[UserController::class,'update']);
    Route::get('/admins',[UserController::class,'indexAdmin']);

    Route::get('/vacancies',[VacancyController::class,'index']);
    Route::get('/vacancies/{id}',[VacancyController::class,'show']);
    Route::put('/vacancies/{id}',[VacancyController::class,'update']);
    Route::delete('/vacancies/{id}',[VacancyController::class,'destroy']);
    Route::get('/pendingVacancies',[VacancyController::class,'indexPending']);
});
