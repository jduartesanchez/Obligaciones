<?php
use Illuminate\Routing\Route;
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

    Route::get('/','InicioController@index')->name('inicio');
    Route::get('seguridad/Loging','Seguridad\LoginController@index')->name('login');
    Route::post('Seguridad/Loging','Seguridad\LogingController@index')->name('login_post');
    Route::group(['prefix' => 'admin','namespace'=> 'Admin','middleware' =>'auth'], function () {
        Route::get('','AdminController@index');        
    });
