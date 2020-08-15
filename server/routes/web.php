<?php

use Illuminate\Routing\Route as RoutingRoute;
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

Route::resource('quizzes', 'QuizController');
//リソースしない場合
Route::get('/quizzes', 'QuizController@index');
Route::get('/quizzes/create', 'QuizController@create');
Route::post('/quizzes/form', 'QuizController@form');
Route::get('/quizzes/{id}', 'QuizController@question');
Route::get('/quizzes/{id}', 'QuizController@question_ans');
// Route::delete('/quiz/delete','QuizController@destroy');
