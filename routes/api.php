<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\StateController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\CityAreaController;
use App\Http\Controllers\Api\MeetingController;
use App\Http\Controllers\Api\ClinicController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show']);

   Route::get('/regions', [RegionController::class, 'index']);
   Route::get('/states', [StateController::class, 'index']);
   Route::get('/countries', [CountryController::class, 'index']);
   Route::get('/cities', [CityController::class, 'index']);
   Route::get('/city-area', [CityAreaController::class, 'index']);
   Route::apiresource('meetings', MeetingController::class);
   Route::patch('meetings/{id}/status', [MeetingController::class, 'updateStatus']);

   // Clinic Route
   Route::get('/clinics',[ClinicController::class, 'index']);



});