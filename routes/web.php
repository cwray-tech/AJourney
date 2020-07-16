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


Auth::routes();

Route::domain('test.ajourney.page')->group(function () {
    Route::get('/', 'PageController@index');
});


Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::get('/dashboard/info', 'DashboardController@edit');
Route::patch('/dashboard/info/update', 'DashboardController@update');
Route::resource('users.journeys', 'UserJourneyController');

Route::get('/', 'StaticPageController@index');
Route::get('/about', 'StaticPageController@about');

Route::resource('journeys', 'JourneyController');

Route::resource('journeys.steps', 'JourneyStepController')->shallow();

Route::post('newsletter', 'NewsletterController@store');
Route::delete('newsletter', 'NewsletterController@destroy');
