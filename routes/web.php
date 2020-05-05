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

Route::get('/',[
    'uses'=>'TaskController@getAllTasks',
    'as'=>'get.tasks'
]);

Route::get('/',[
    'uses'=>'HomeController@index',
    'as'=>'get_home'
]);

Route::get('/delete/{id}',[
    'uses' => 'TaskController@deleteTask',
    'as'=>'delete.task'
]);

Route::post('/',[
    'uses'=>'TaskController@AddTask',
    'as'=>'add.task'
]);

Route::post('/edit',[
    'uses' => 'TaskController@postEditTask',
    'as'=>'update.task'
]);

Route::get('/edit/{id}',
    [
    'uses'=>'TaskController@getEditTask',
    'as'=>'edit.task'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
