<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\OrdenadorController;

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
    return view('welcome');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

 // Rutas de panel administrativo
//  Route::resource('equipments',EquipmentController::class);
 Route::get('/equipments', [App\Http\Controllers\EquipmentController::class, 'index'])->name('equipments');
 Route::get('/keyboards', [App\Http\Controllers\KeyboardController::class, 'index'])->name('keyboards');
 Route::get('/monitors', [App\Http\Controllers\MonitorController::class, 'index'])->name('monitors');
 Route::get('/mouses', [App\Http\Controllers\MouseController::class, 'index'])->name('mouses');
 Route::get('/ordenadores', [App\Http\Controllers\OrdenadorController::class, 'index'])->name('ordenadores');

 Route::resource('users',UserController::class);
//  Route::resource('keyboards',KeyboardController::class);
//  Route::resource('monitors',MonitorController::class);
//  Route::resource('mouses',MouseController::class);
//  Route::resource('ordenadores',OrdenadorController::class);

// Route::resource('equipments',EquipmentController::class);
