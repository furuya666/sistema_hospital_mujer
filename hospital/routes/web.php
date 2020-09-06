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
Route::resource('faltas', 'FaltaController');
Auth::routes(['reset'=>false]);
//Route::get('/personapdf','PersonaController@pdfpersona');

Route::get('/home', 'HomeController@index')->name('home');
