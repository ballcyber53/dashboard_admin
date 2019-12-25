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


Route::get('/', function () {
    return view('welcome');
});

Route::get('home1', function () {
    return view('home1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function () {

    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // });
    Route::get('/dashboard','Admin\DashboardController@ShowUser');

    Route::resource('rooms','RoomController');








    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');


});

Route::group(['middleware' => ['auth','student']], function () {

        Route::get('/student', function () {
            return view('student.dashboard');
        });
        Route::get('/room', function () {
            return view('student.room');
        });
    });









