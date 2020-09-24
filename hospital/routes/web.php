<?php

use App\Permiso;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::resource('personas', 'PersonaController')->middleware('auth');

Route::resource('permisos', 'PermisoController')->middleware('auth');
Route::resource('vacacions', 'VacacionController')->middleware('auth');
Route::resource('files','FileController')->middleware('auth');
Route::resource('faltas', 'FaltaController')->middleware('auth');
Auth::routes(['reset'=>false]);
//Auth::routes(['register'=>false,'reset'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
