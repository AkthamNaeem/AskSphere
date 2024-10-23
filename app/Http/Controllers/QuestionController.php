<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\EditQuestionRequest;
use App\Http\Requests\QuestionRequest;
use App\Http\Requests\SearchQuestionRequest;
use App\Services\QuestionService;
use Throwable;

class QuestionController extends Controller
{
    protected QuestionService $questionService;

    public function __construct(QuestionService $questionService) {
        $this->questionService = $questionService;
    }

    public function index(SearchQuestionRequest $request) {
        $data = [];
        try {
            $data = $this->questionService->index($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function like(QuestionRequest $request) {
        $data = [];
        try {
            $data = $this->questionService->like($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function create(CreateQuestionRequest $request) {
        $data = [];
        try {
            $data = $this->questionService->create($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function show(QuestionRequest $request) {
        $data = [];
        try {
            $data = $this->questionService->show($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function edit(EditQuestionRequest $request) {
        $data = [];
        try {
            $data = $this->questionService->edit($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function delete(QuestionRequest $request) {
        $data = [];
        try {
            $data = $this->questionService->delete($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }
}
