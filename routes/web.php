<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\MatchController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ScoreController;
use App\Http\Controllers\Admin\PlayersController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Frontend\TeamsController;
use App\Http\Controllers\Frontend\PlayerController;
use App\Http\Controllers\Frontend\ScheduleController;
use App\Http\Controllers\Frontend\NewsesController;

use App\Http\Controllers\HomeController;
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


//START OF ADMIN 

    
Route::get('/login', function () {
    return view('admin.login');
})->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth'],'prefix' => 'admin', 'as' => 'admin.'],function (){
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('/teams', Admin\TeamController::class);
    Route::resource('/scores', Admin\ScoreController::class);
    Route::resource('/news', Admin\NewsController::class);
    Route::resource('/players', Admin\PlayersController::class);
    Route::resource('/matches', Admin\MatchController::class);
});
Route::get('/team', [TeamsController::class, 'index'])->name('team');
Route::get('/player', [PlayerController::class, 'index'])->name('player');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/players/{id}', [PlayerController::class, 'show'])->name('frontend.player.show');
Route::get('/news', [NewsesController::class, 'index'])->name('news');


//END OF ADMIN 

Route::get('/', [HomeController::class, 'home']);