<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use APP\User;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UserController');
Route::get('/admin/login','AdminController@login')->name('admin.login');
Route::get('/admin/list','AdminController@UserList')->name('admin.list');
Route::post('/admin/check','AdminController@AdminCheck')->name('admin.check');
Route::get('admin/edit/{id}','AdminController@adminEdit')->name('admin.edit');
Route::post('admin/edit/{id}','AdminController@AdminUpdate')->name('admin.update');
Route::get('/admin/list/{id}','AdminController@adminview')->name('admin.view');
Route::delete('/admin/delete/{id}','AdminController@destroy')->name('admin.delete');

