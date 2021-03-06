<?php

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

Route::get('/', 'SampleController@index')->name('index');



Route::group(['middleware' => ['admin']], function () {
  Route::get('/home', 'SampleController@home')->name('home');
  Route::get('/wijet', 'SampleController@wijjet')->name('wijjet');
  Route::get('/graf', 'SampleController@geraf')->name('geraf');
  Route::get('/datable', 'SampleController@datable')->name('datable');
  Route::get('/profile', 'UserController@showProfile')->name('user.profile');
});

Route::get( '/task/request','TaskController@showTaskRequest')->name('task.showrequest');
Route::get( '/task/request/new','TaskController@showTaskRequestNew')->name('task.newrequest');
Route::get( '/task/list','TaskController@showTaskList')->name('task.showlist');
Route::get( '/task/open','TaskController@showTaskOpen')->name('task.showopen'); //Advertisement
Route::get( '/user/skill/','UserSkillController@index')->name('userskill.index');
