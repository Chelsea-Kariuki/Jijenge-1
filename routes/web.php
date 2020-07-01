<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin')->group(function (){
    Route::resource('users', 'UserController', ['except' => ['show','create','store']]);
    Route::resource('home', 'HomeController');
    Route::resource('documents', 'DocumentsController');
    Route::resource('topics', 'TopicController');
});
Route::get('admin/topics/{id}', 'Admin\TopicController@show')->name('show-topic')->middleware('can:admin');
Route::post('admin/documents/{id}', 'Admin\DocumentsController@store')->name('store-document')->middleware('can:admin');

Route::resource('userTopics', 'TopicController');
Route::get('userTopics/{id}', 'TopicController@show')->name('user-show-topic');

Route::get('userDocuments/{id}', 'DocumentController@index')->name('user-show-document');
