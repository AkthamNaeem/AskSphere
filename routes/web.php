<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/explore', [HomeController::class, 'explore'])->name('explore');

Route::controller(QuestionController::class)->group(function()
{
    Route::post('/questions/index', 'index')->name('questions.get');
    Route::post('/question/like', 'like')->name('question.like');
    Route::post('/question/create', 'create')->name('question.create');
    Route::post('/question/show', 'show')->name('question.show');
    Route::post('/question/edit', 'edit')->name('question.edit');
    Route::post('/question/delete', 'delete')->name('question.delete');
})->middleware('auth');

Route::controller(AnswerController::class)->group(function()
{
    Route::post('/answers/index', 'index')->name('answers.index');
    Route::post('/answer/create', 'create')->name('answer.create');
    Route::post('/answer/like', 'like')->name('answer.like');
    Route::post('/answer/show', 'show')->name('answer.show');
    Route::post('/answer/edit', 'edit')->name('answer.edit');
    Route::post('/answer/delete', 'delete')->name('answer.delete');
})->middleware('auth');
