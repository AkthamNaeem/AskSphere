<?php

namespace App\Services;

use App\Models\Answer;
use App\Models\Like;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AnswerService
{
    public function create($request) {
        $question = Question::query()
            ->whereNot('answered', '=', true)
            ->find($request['question_id']);

        $answer = null;

        if($question) {
            $answer = Answer::query()->create([
                'user_id' => Auth::id(),
                'question_id' => $request['question_id'],
                'content' => $request['content']
            ]);
        }

        $code = 200;
        $message = 'success';
        return ['data' => $answer, 'message' => $message, 'code' => $code];
    }

    public function index($request) {
        $answers = Answer::query()->select(
            'answers.id',
            'answers.user_id',
            'answers.question_id',
            'answers.content',
            'answers.best',
            'answers.created_at',
            'answers.updated_at',
            'questions.user_id as questioner_id',
            'questions.answered as question_answered',
            'users.name as user_name',
            'my_likes.id as my_like',
            DB::raw('COUNT(DISTINCT likes.id) as likes_count'))
            ->join('questions', 'questions.id', '=', 'answers.question_id')
            ->join('users', 'users.id', '=', 'answers.user_id')
            ->leftJoin('likes as my_likes', function ($join) {
                $join->on('my_likes.likeable_id', '=', 'answers.id')
                    ->where('my_likes.likeable_type', '=', 'answer')
                    ->where('my_likes.user_id', '=', Auth::id());
            })
            ->leftJoin('likes', function ($join) {
                $join->on('likes.likeable_id', '=', 'answers.id')
                    ->where('likes.likeable_type', '=', 'answer');})
            ->where('answers.question_id', '=', $request['question_id'])
            ->groupBy(
                'answers.id',
                'answers.user_id',
                'answers.question_id',
                'answers.content',
                'answers.best',
                'answers.created_at',
                'answers.updated_at',
                'my_like',
                'questioner_id',
                'question_answered',
                'user_name',
            )
            ->orderBy('best', 'desc')->orderBy('answers.created_at', 'desc')
            ->get();
            
        $message = 'success';
        $code = 200;
        return ['data' => $answers, 'message' => $message, 'code' => $code];
    }

    public function like($request) {
        $like = Like::query()
            ->where('likeable_id', '=', $request['answer_id'])
            ->where('likeable_type', '=', 'answer')
            ->where('user_id', '=', Auth::id())->first();

        if($like) {
            $like->delete();
            $message = 'unlike';
        }
        else {
            Like::query()->create([
                'likeable_id' => $request['answer_id'],
                'likeable_type' => 'answer',
                'user_id' => Auth::id()
            ]);
            $message = 'like';
        }

        $code = 200;
        return ['data' => [], 'message' => $message, 'code' => $code];
    }

    public function show($request) {
        $answer = Answer::query()->select(
            'answers.id',
            'answers.user_id',
            'answers.question_id',
            'answers.content',
            'answers.best',
            'answers.created_at',
            'answers.updated_at',
            'questions.user_id as questioner_id',
            'questions.answered as question_answered',
            'users.name as user_name',
            'my_likes.id as my_like',
            DB::raw('COUNT(DISTINCT likes.id) as likes_count'))
            ->join('questions', 'questions.id', '=', 'answers.question_id')
            ->join('users', 'users.id', '=', 'answers.user_id')
            ->leftJoin('likes as my_likes', function ($join) {
                $join->on('my_likes.likeable_id', '=', 'answers.id')
                    ->where('my_likes.likeable_type', '=', 'answer')
                    ->where('my_likes.user_id', '=', Auth::id());
            })
            ->leftJoin('likes', function ($join) {
                $join->on('likes.likeable_id', '=', 'answers.id')
                    ->where('likes.likeable_type', '=', 'answer');})
            ->groupBy(
                'answers.id',
                'answers.user_id',
                'answers.question_id',
                'answers.content',
                'answers.best',
                'answers.created_at',
                'answers.updated_at',
                'my_like',
                'questioner_id',
                'question_answered',
                'user_name',
            )->find($request['answer_id']);


        $code = 200;
        $message = 'success';
        return ['data' => $answer, 'message' => $message, 'code' => $code];
    }

    public function edit($request) {
        $answer = Answer::query()->where('user_id', '=', Auth::id())->find($request['answer_id']);

        if($answer) {
            $answer->update([
                'content' => $request['content'],
            ]);
            $code = 200;
            $message = 'success';
        } else {
            $code = 400;
            $message = 'error';
        }

        return ['data' => $answer, 'message' => $message, 'code' => $code];
    }

    public function delete($request) {
        $answer = Answer::query()->where('user_id', '=', Auth::id())->find($request['answer_id']);

        if($answer) {
            if($answer->best) {
                $question = Question::query()->find($answer['question_id']);
                $question->timestamps = false;
                $question->update([
                    'answered' => false
                ]);
            }
            $answer->delete();
            $code = 200;
            $message = 'success';
        } else {
            $code = 400;
            $message = 'error';
        }

        return ['data' => $answer, 'message' => $message, 'code' => $code];
    }

    public function best($request) {
        $answer = Answer::query()->find($request['answer_id']);

        if($answer) {
            $question = Question::query()
            ->where('user_id', '=', Auth::id())
            ->whereNot('answered', '=', true)
            ->find($answer['question_id']);
            if($question) {
                $answer->timestamps = false;
                $answer->update([
                    'best' => true
                ]);
                
                $question->timestamps = false;
                $question->update([
                    'answered' => true
                ]);
                $answer = Answer::query()->select(
                    'answers.id',
                    'answers.user_id',
                    'answers.question_id',
                    'answers.content',
                    'answers.best',
                    'answers.created_at',
                    'answers.updated_at',
                    'questions.user_id as questioner_id',
                    'questions.answered as question_answered',
                    'users.name as user_name',
                    'my_likes.id as my_like',
                    DB::raw('COUNT(DISTINCT likes.id) as likes_count'))
                    ->join('questions', 'questions.id', '=', 'answers.question_id')
                    ->join('users', 'users.id', '=', 'answers.user_id')
                    ->leftJoin('likes as my_likes', function ($join) {
                        $join->on('my_likes.likeable_id', '=', 'answers.id')
                            ->where('my_likes.likeable_type', '=', 'answer')
                            ->where('my_likes.user_id', '=', Auth::id());
                    })
                    ->leftJoin('likes', function ($join) {
                        $join->on('likes.likeable_id', '=', 'answers.id')
                            ->where('likes.likeable_type', '=', 'answer');})
                    ->groupBy(
                        'answers.id',
                        'answers.user_id',
                        'answers.question_id',
                        'answers.content',
                        'answers.best',
                        'answers.created_at',
                        'answers.updated_at',
                        'my_like',
                        'questioner_id',
                        'question_answered',
                        'user_name',
                    )->find($request['answer_id']);
                $code = 200;
                $message = 'success';
            } else {
                $code = 400;
                $message = 'error';
            }
        } else {
            $code = 400;
            $message = 'error';
        }

        return ['data' => $answer, 'message' => $message, 'code' => $code];
    }

}
