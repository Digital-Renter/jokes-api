<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Joke;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joke_id = request()->get('joke_id');
        if (!$joke_id) {
            return response(['message' => 'Can only pull comments based on a joke. Pass the joke to get all its comments'], 400);
        }

        $comments = Comment::where('joke_id', $joke_id)->with('commenter')->get();
        return response($comments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        $data = $request->validated();
        $data['commenter_id'] = 1;
        $comment = Comment::create([
            'comment' => $data['comment'],
            'joke_id' => $data['joke_id'],
            'commenter_id' => $data['commenter_id'],
        ]);

        $comment->commenter;

        return response($comment);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
