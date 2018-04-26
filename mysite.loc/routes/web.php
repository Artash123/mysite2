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

Route::get('intelurok','IndexController@index');

Route::get('course','CourseController@index');
Route::get('olympics','OlympicsController@index');
Route::get('olympics/add_application','OlympicsController@add_application');
Route::get('webinars','WebinarController@index');
Route::get('tests','TestController@index');
Route::get('quiz','QuizController@index');
Route::get('quiz/add_application','QuizController@add_application');
Route::get('publications','PublicationController@index');
Route::get('publications/my_publications','PublicationController@my_publication');
Route::get('publications/publication','PublicationController@publication');
Route::get('applications/my_application','ApplicationController@my_applications');
Route::get('results','ResultsController@index');
Route::get('rewards','RewardsController@index');