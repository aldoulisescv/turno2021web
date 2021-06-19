<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendPassMail;
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

Route::get('/', function () {
    return redirect('/welcome');
    // Route::view('/login', 'home');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/outwelcome', [App\Http\Controllers\Auth\LoginController::class, 'outwelcome']);
Auth::routes(['verify' => true, 'register' => false]);

Route::middleware(['auth'])->group(function(){
    // Route::group(['middleware' => ['role:super_admin']], function () {
       
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->withoutMiddleware(['root:root']);
        Route::resource('users', App\Http\Controllers\UserController::class);
        Route::resource('permissions', App\Http\Controllers\PermissionController::class);
        Route::resource('roles', App\Http\Controllers\RoleController::class);
        Route::resource('categories', App\Http\Controllers\CategoryController::class);
        Route::resource('establishments', App\Http\Controllers\EstablishmentController::class);
        Route::resource('resources', App\Http\Controllers\ResourceController::class);
        Route::resource('sessions', App\Http\Controllers\SessionController::class);
        Route::resource('schedules', App\Http\Controllers\ScheduleController::class);
        Route::resource('relationResourceSessions', App\Http\Controllers\RelationResourceSessionController::class);
        Route::resource('statusTurnos', App\Http\Controllers\StatusTurnoController::class);
        Route::resource('turnos', App\Http\Controllers\TurnoController::class);

        Route::resource('prospects', App\Http\Controllers\ProspectController::class);

Route::resource('blockedDates', App\Http\Controllers\BlockedDatesController::class);



Route::resource('helps', App\Http\Controllers\HelpController::class);
    // });

});

