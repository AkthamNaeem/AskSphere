<?php


use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::controller(QuestionController::class)->group(function()
{
    Route::post('/questions/index', 'index');
});

Route::controller(AnswerController::class)->group(function()
{
    Route::post('/answer/index', 'index');
});
