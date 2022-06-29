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

Route::post('/login', 'AuthController@login');

Route::get('/logout', 'AuthController@logout');
Route::post('/register', 'AuthController@register');
Route::post('/upload', 'ProspectAPIController@saveImage');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/subirimagedata','ProspectAPIController@uploadimage');
Route::middleware(['auth:api'])->group(function(){
    Route::resource('resources', ResourceAPIController::class);
    Route::resource('sessions', SessionAPIController::class);
    Route::resource('schedules', ScheduleAPIController::class);
    Route::resource('relation_resource_sessions', RelationResourceSessionAPIController::class);

    Route::resource('status_turnos', StatusTurnoAPIController::class);




    Route::resource('establishments', EstablishmentAPIController::class);
   

    Route::resource('turnos', TurnoAPIController::class);
    Route::resource('categories', CategoryAPIController::class);
    Route::resource('statusTurnos', StatusTurnoAPIController::class);

    Route::resource('helps', HelpAPIController::class);
    Route::resource('users', UserAPIController::class);

    Route::resource('blocked_dates', BlockedDatesAPIController::class);
    Route::resource('prospects', ProspectAPIController::class);
    
    Route::get('/home/{establishment}', 'CallController@home'); 
    Route::get('/viewchange/{establishment}', 'CallController@viewchange');
});



