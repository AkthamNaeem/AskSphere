<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswersRequest;
use App\Http\Requests\CreateAnswerRequest;
use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\EditAnswerRequest;
use App\Http\Requests\ShowAnswersRequest;
use App\Models\Like;
use App\Services\AnswerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class AnswerController extends Controller
{
    private AnswerService $answerService;

    public function __construct(AnswerService $answerService) {
        $this->answerService = $answerService;
    }

    public function create(CreateAnswerRequest $request) {
        $data = [];
        try {
            $data = $this->answerService->create($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function index(ShowAnswersRequest $request) {
        $data = [];
        try {
            $data = $this->answerService->index($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function like(AnswersRequest $request) {
        $data = [];
        try {
            $data = $this->answerService->like($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function show(AnswersRequest $request) {
        $data = [];
        try {
            $data = $this->answerService->show($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function edit(EditAnswerRequest $request) {
        $data = [];
        try {
            $data = $this->answerService->edit($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }

    public function delete(AnswersRequest $request) {
        $data = [];
        try {
            $data = $this->answerService->delete($request);
            return response()->json(['data' => $data['data'], 'message' => $data['message']], $data['code']);
        } catch (Throwable $throwable) {
            $message = $throwable->getMessage();
            return response()->json(['data' => $data, 'message' => $message, 500]);
        }
    }


}
