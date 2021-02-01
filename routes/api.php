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






























Route::resource('establishments', App\Http\Controllers\API\EstablishmentAPIController::class);

Route::resource('resources', App\Http\Controllers\API\ResourceAPIController::class);

























Route::resource('sessions', App\Http\Controllers\API\SessionAPIController::class);

Route::resource('schedules', App\Http\Controllers\API\ScheduleAPIController::class);

Route::resource('relation_resource_sessions', App\Http\Controllers\API\RelationResourceSessionAPIController::class);

Route::resource('status_turnos', App\Http\Controllers\API\StatusTurnoAPIController::class);

Route::resource('turnos', App\Http\Controllers\API\TurnoAPIController::class);

Route::resource('prospects', App\Http\Controllers\API\ProspectAPIController::class);