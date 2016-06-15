<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controller('admin/users', 'Admin\Users');
Route::controller('admin/roles', 'Admin\Roles');
Route::controller('admin', 'Admin\Index');

Route::controller('courses', 'CoursesController');
Route::controller('api', 'ApiController');
Route::controller('test', 'TestController');
Route::controller('auth', 'NTECAuthController');

Route::controller('/', 'IndexController');