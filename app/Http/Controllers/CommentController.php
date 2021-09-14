<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CreateRequest;
use App\Jobs\AddNewComment;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    public function index()
    {
        return view('app.home');
    }

    public function store(CreateRequest $request): JsonResponse
    {
        AddNewComment::dispatch($request['name'], $request['email'], $request['comment']);

        return response()->json(['status' => 'success']);
    }

    public function show(): JsonResponse
    {
        $comments = Comment::allComments();
        return response()->json($comments);
    }
}
