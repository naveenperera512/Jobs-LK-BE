<?php

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

use Modules\User\Http\Controllers\CategoryController;
use Modules\User\Http\Controllers\DistrictCityController;
use Modules\User\Http\Controllers\DistrictController;
use Modules\User\Http\Controllers\JobTypeController;
use Modules\User\Http\Controllers\VacancyController;

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);


Route::get('/districts', [DistrictController::class, 'index']);
Route::get('/districts/{id}', [DistrictController::class, 'show']);

Route::get('/districts/{district}/cities',[DistrictCityController::class,'index']);
Route::get('/cities/{city}',[DistrictCityController::class,'show']);

Route::get('/jobTypes', [JobTypeController::class, 'index']);
Route::get('/jobTypes/{id}', [JobTypeController::class, 'show']);

Route::get('/vacancies', [VacancyController::class, 'index']);
Route::get('/vacancies/{id}', [VacancyController::class, 'show']);

