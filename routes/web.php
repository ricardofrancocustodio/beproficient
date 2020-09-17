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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::any('/tests', 'TestController@index');
Route::post('/store', 'TestController@store')->name('store');
Route::post('/savequestions', 'TestController@savequestions')->name('savequestions');
Route::get('/englishproficiencytest', 'TestController@englishproficiencytest')->name('englishproficiencytest');
Route::any('/testquestion', 'TestController@testquestion')->name('tests.testquestion');
Route::get('/instructions', 'TestController@instructions')->name('instructions');
Route::any('/testtoefl', 'TestController@testToefl')->name('testtoefl');
Route::get('/testlist', 'TestController@testlist')->name('testlist');
Route::resource('/tests', 'TestController');
//Route::resource('/testquestion', 'TestController');
//Route::resource('/tests', 'TestController');
//Route::post('/tests', 'TestController@ajaxRequestPost')->name('tests');