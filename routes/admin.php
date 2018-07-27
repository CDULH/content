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

Route::match( ['get'], '/content', 'ContentController@index' )->name('content');
Route::match( ['get'], '/content/modify/{id?}', 'ContentController@modify' )->name('content/modify');
Route::match( ['get'], '/content/remove/{id}', 'ContentController@remove' )->name('content/remove');
Route::match( ['post'], '/content/modifyPost', 'ContentController@modifyPost' )->name('content/modifyPost');

Route::match( ['get'], '/manager', 'ManagerController@index' )->name('manager');
Route::match( ['get',], '/manager/modify/{id?}', 'ManagerController@modify' )->name('manager/modify');
Route::match( ['get'], '/manager/remove/{id}', 'ManagerController@remove' )->name('manager/remove');
Route::match( ['post'], '/manager/modifyPost', 'ManagerController@modifyPost' )->name('manager/modifyPost');

Route::match( ['get'], '/managerRole', 'ManagerRoleController@index' )->name('managerRole');
Route::match( ['get',], '/managerRole/modify/{id?}', 'ManagerRoleController@modify' )->name('managerRole/modify');
Route::match( ['get'], '/managerRole/remove/{id}', 'ManagerRoleController@remove' )->name('managerRole/remove');
Route::match( ['post'], '/managerRole/modifyPost', 'ManagerRoleController@modifyPost' )->name('managerRole/modifyPost');
Route::match( ['get'], '/managerRole/permission/{id}', 'ManagerRoleController@permission' )->name('managerRole/permission');
Route::match( ['post'], '/managerRole/permissionPost', 'ManagerRoleController@permissionPost' )->name('managerRole/permissionPost');


Route::match( ['get'], '/config', 'ConfigController@index' )->name('config');
Route::match( ['get'], '/config/modify/{id?}', 'ConfigController@modify' )->name('config/modify');
Route::match( ['get'], '/config/remove/{id}', 'ConfigController@remove' )->name('config/remove');
Route::match( ['post'], '/config/modifyPost', 'ConfigController@modifyPost' )->name('config/modifyPost');

Route::match( ['get'], '/banner', 'BannerController@index' )->name('banner');
Route::match( ['get'], '/banner/modify/{id?}', 'BannerController@modify' )->name('banner/modify');
Route::match( ['get'], '/banner/remove/{id}', 'BannerController@remove' )->name('banner/remove');
Route::match( ['post'], '/banner/modifyPost', 'BannerController@modifyPost' )->name('banner/modifyPost');

Route::match( ['post'], '/file/modifyPost', 'FileController@modifyPost' )->name('file/modifyPost');
Route::match( ['post'], '/file/remove', 'FileController@remove' )->name('file/remove');

Route::match( ['get'], '/code/captcha/{id}', 'CodeController@captcha' )->name('code/captcha');
Route::match( ['get'], '/code/check', 'CodeController@check' )->name('code/check');