<?php

namespace App\Services;

use App\Models\Like;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Illuminate\Events\queueable;

class QuestionService
{
    public function index($request) {
        $questions = Question::query()->select(
            'questions.id',
            'questions.user_id',
            'questions.category_id',
            'questions.content',
            'questions.answered',
            'questions.created_at',
            'questions.updated_at',
            'users.name as user_name',
            'categories.name as category_name',
            'my_likes.id as my_like',
            DB::raw('COUNT(DISTINCT likes.id) as likes_count'),
            DB::raw('COUNT(DISTINCT answers.id) as answers_count'))
            ->join('users', 'users.id', '=', 'questions.user_id')
            ->join('categories', 'categories.id', '=', 'questions.category_id')
            ->leftJoin('likes', function ($join) {
                $join->on('likes.likeable_id', '=', 'questions.id')
                    ->where('likes.likeable_type', '=', 'question');
            })
            ->leftJoin('answers', 'answers.question_id', '=', 'questions.id')
            ->leftJoin('likes as my_likes', function ($join) {
                $join->on('my_likes.likeable_id', '=', 'questions.id')
                    ->where('my_likes.likeable_type', '=', 'question')
                    ->where('my_likes.user_id', '=', Auth::id());
            })
            ->where('category_id', '=', $request['category_id']);



        $questions = match ($request['filter_with']) {
            'all' => $questions,
            'answered' => $questions->where('questions.answered', '=', true),
            'unanswered' =>  $questions->where('questions.answered', '=', false),
        };

        $questions->groupBy(
            'questions.id',
            'questions.user_id',
            'questions.category_id',
            'questions.content',
            'questions.answered',
            'questions.created_at',
            'questions.updated_at',
            'user_name',
            'category_name',
            'my_like');

        $questions = match ($request['order_by']) {
            'popular' => $questions->orderBy('likes_count', 'desc')->orderBy('answers_count','desc')->orderBy('questions.answered', 'desc'),
            'latest' => $questions->orderBy('questions.created_at', 'desc'),
            'oldest' => $questions->orderBy('questions.created_at'),
        };

        if($request['search']) {
            $keywords = explode(' ', $request['search']);
            $questions =  $questions->where(function ($query) use ($keywords) {
                foreach ($keywords as $keyword) {
                    $query->where('questions.content', 'LIKE', '%' . $keyword . '%');
                }
            });
        }

        $questions = $questions->get();

        foreach ($questions as $question) {
            if($question['questions.user_id'] == Auth::id()) {
                $question['my_question'] = 1;
            } else {
                $question['my_question'] = 0;
            }
        }

        $message = 'success';
        $code = 200;
        return ['data' => $questions, 'message' => $message, 'code' => $code];
    }

    public function like($request) {
        $like = Like::query()
            ->where('likeable_id', '=', $request['question_id'])
            ->where('likeable_type', '=', 'question')
            ->where('user_id', '=', Auth::id())->first();

        if($like) {
            $like->delete();
            $message = 'unlike';
        }
        else {
            Like::query()->create([
                'likeable_id' => $request['question_id'],
                'likeable_type' => 'question',
                'user_id' => Auth::id()
            ]);
            $message = 'like';
        }

        $code = 200;
        return ['data' => [], 'message' => $message, 'code' => $code];
    }

    public function create($request) {
        $question = Question::query()->create([
            'user_id' => Auth::id(),
            'category_id' => $request['category_id'],
            'content' => $request['content']
        ]);

        $code = 200;
        $message = 'success';
        return ['data' => $question, 'message' => $message, 'code' => $code];
    }

    public function show($request) {
        $question = Question::query()->select(
            'questions.id',
            'questions.user_id',
            'questions.category_id',
            'questions.content',
            'questions.answered',
            'questions.created_at',
            'questions.updated_at',
            'users.name as user_name',
            'categories.name as category_name',
            'best_answers.id as best_answer_id',
            'best_answers.content as best_answer_content',
            'my_likes.id as my_like',
            DB::raw('COUNT(DISTINCT likes.id) as likes_count'),
            DB::raw('COUNT(DISTINCT answers.id) as answers_count'))
            ->join('users', 'users.id', '=', 'questions.user_id')
            ->join('categories', 'categories.id', '=', 'questions.category_id')
            ->leftJoin('likes', function ($join) {
                $join->on('likes.likeable_id', '=', 'questions.id')
                    ->where('likes.likeable_type', '=', 'question');
            })
            ->leftJoin('answers', 'answers.question_id', '=', 'questions.id')
            ->leftJoin('answers as best_answers', function ($join) {
                $join->on('best_answers.question_id', '=', 'questions.id')
                    ->where('best_answers.best', '=', true);
            })
            ->leftJoin('likes as my_likes', function ($join) {
                $join->on('my_likes.likeable_id', '=', 'questions.id')
                    ->where('my_likes.likeable_type', '=', 'question')
                    ->where('my_likes.user_id', '=', Auth::id());
            })
            ->groupBy(
                'questions.id',
                'questions.user_id',
                'questions.category_id',
                'questions.content',
                'questions.answered',
                'questions.created_at',
                'questions.updated_at',
                'user_name',
                'category_name',
                'best_answer_id',
                'best_answer_content',
                'my_like',
            )->find($request['question_id']);


        $code = 200;
        $message = 'success';
        return ['data' => $question, 'message' => $message, 'code' => $code];
    }

    public function edit($request) {
        $question = Question::query()->where('user_id', '=', Auth::id())->find($request['question_id']);

        if($question) {
            $question->update([
                'content' => $request['content'],
            ]);
            $code = 200;
            $message = 'success';
        } else {
            $code = 400;
            $message = 'error';
        }

        return ['data' => $question, 'message' => $message, 'code' => $code];
    }

    public function delete($request) {
        $question = Question::query()->where('user_id', '=', Auth::id())->find($request['question_id']);

        if($question) {
            $question->delete();
            $code = 200;
            $message = 'success';
        } else {
            $code = 400;
            $message = 'error';
        }

        return ['data' => $question, 'message' => $message, 'code' => $code];
    }

}
