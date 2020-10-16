<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactForm;

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
//Route::post('/email', 'BlogController@email')->name('email');
Route::post('/savequestions', 'TestController@savequestions')->name('savequestions');
Route::get('/englishproficiencytest', 'TestController@englishproficiencytest')->name('englishproficiencytest');
Route::any('/testquestion/{id}', 'TestController@testquestion')->name('tests.testquestion');
Route::get('/instructions', 'TestController@instructions')->name('instructions');
Route::get('/contact', 'TestController@contact')->name('contact');
Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::any('/destroy/{id}', 'TestController@destroy')->name('tests.destroy');
Route::get('/testlist', 'TestController@testlist')->name('tests.testlist');
Route::resource('/tests', 'TestController');
//Route::resource('/', 'TestController');
Route::delete('/testlist', 'TestController@destroy')->name('tests.testlist');
Route::resource('/blog', 'BlogController');
//Route::get('email', 'HomeController@email');

//Route for mail
Route::get('/mail/contactForm', function()
{
	$user = new stdClass();
	//$user->from = 'contact@englishacademics.online';
	$user->name = 'English Academics';
	$user->email = 'ricardofranco.qa@gmail.com';

	//return new \App\Mail\contactForm($user);

	Mail::send(new contactForm($user));
});




//Turnarund for Blog Posts (please, later save in DB)
Route::get('/blog/articles/practice-english-speaking', 'BlogController@practiceenglishspeaking')->name('blog.articles.practice-english-speaking');
Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');
//Route::get('/thank-you', 'TestController@thankyou')->name('thank-you');




//Route::get('/blog', 'BlogController@blog')->name('blog');

//Route::delete('testquestion/{id}', 'TestController@destroy')->name('testquestion.destroy');
//Route::resource('/testquestion', 'TestController');
//Route::resource('/tests', 'TestController');
//Route::post('/tests', 'TestController@ajaxRequestPost')->name('tests');