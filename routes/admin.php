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

Route::match( ['get', 'post'], 'login/login', 'LoginController@login' )->name('login');
Route::match( ['get'], '/', 'IndexController@index' );
Route::match( ['get', 'post'], '/logout', 'IndexController@logout' )->name('logout');

Route::match( ['get', 'post'], '/content', 'ContentController@index' )->name('content');
Route::match( ['get', 'post'], '/content/modify/{id?}', 'ContentController@modify' )->name('content/modify');
Route::match( ['get'], '/content/remove/{id}', 'ContentController@remove' )->name('content/remove');
Route::match( ['post'], '/content/modifyPost', 'ContentController@modifyPost' )->name('content/modifyPost');

Route::match( ['get'], '/config', 'ConfigController@index' )->name('config');
Route::match( ['get', 'post'], '/config/modify/{id?}', 'ConfigController@modify' )->name('config/modify');
Route::match( ['get'], '/config/remove/{id}', 'ConfigController@remove' )->name('config/remove');
Route::match( ['post'], '/config/modifyPost', 'ConfigController@modifyPost' )->name('config/modifyPost');


