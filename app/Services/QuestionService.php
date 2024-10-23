<?php

namespace App\Services;

use App\Models\Answer;
use App\Models\Like;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Illuminate\Events\queueable;

class QuestionService
{
    public function index($request) {
        $questions = Question::query()->select(
            'questions.*',
            'users.name as user_name',
            'my_likes.id as my_like',
            DB::raw('COUNT(DISTINCT likes.id) as likes_count'),
            DB::raw('COUNT(DISTINCT answers.id) as answers_count'))
            ->join('users', 'users.id', '=', 'questions.user_id')
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
            ->when($request['my'], function ($query) {
                $query->where('questions.user_id', '=', Auth::id());
            })
            ->when($request['search'], function ($query) use ($request) {
                $query->whereFullText('questions.content', $request['search']);
            })
            ->when($request['filter_with'], function ($query) use ($request) {
                $query = match ($request['filter_with']) {
                    'all' => $query,
                    'answered' => $query->where('questions.answered', '=', true),
                    'unanswered' =>  $query->where('questions.answered', '=', false),
                };
            })
            ->where('category_id', '=', $request['category_id'])
            ->groupBy(
            'questions.id',
            'questions.user_id',
            'questions.category_id',
            'questions.content',
            'questions.answered',
            'questions.created_at',
            'questions.updated_at',
            'user_name',
            'my_like')
            ->when($request['order_by'], function ($query) use ($request) {
                $query = match ($request['order_by']) {
                    'popular' => $query->orderBy('likes_count', 'desc')->orderBy('answers_count','desc')->orderBy('questions.answered', 'desc'),
                    'latest' => $query->orderBy('questions.created_at', 'desc'),
                    'oldest' => $query->orderBy('questions.created_at'),
                };
            })->paginate(4);
        
        $questions->getCollection()->transform(function ($question) {
            $question->my_question = ($question['user_id'] == Auth::id()) ? 1 : 0;
            
            return $question;
        });

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
            'questions.*',
            'users.name as user_name',
            'my_likes.id as my_like',
            DB::raw('COUNT(DISTINCT likes.id) as likes_count'),
            DB::raw('COUNT(DISTINCT answers.id) as answers_count'))
            ->join('users', 'users.id', '=', 'questions.user_id')
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
            ->groupBy(
            'questions.id',
            'questions.user_id',
            'questions.category_id',
            'questions.content',
            'questions.answered',
            'questions.created_at',
            'questions.updated_at',
            'user_name',
            'my_like')
            ->find($request['question_id']);


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
