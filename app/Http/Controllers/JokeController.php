<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJokeRequest;
use App\Http\Requests\UpdateJokeRequest;
use App\Models\Joke;
use App\Models\User;

class JokeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jokes = new Joke();
        if ($category_id = request()->get('category_id')) {
            $jokes = $jokes->where('category_id', $category_id);
        }

        $jokes = $jokes->with(['author', 'category', 'comments', 'comments.commenter'])->get();

        return response($jokes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJokeRequest $request)
    {
        $data = $request->validated();

        $email = $data['author_email'];
        $user = User::where('email', $email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $data['author_name'],
                'email' => $data['author_email'],
            ]);
        }

        $joke = Joke::create([
            'punchline' => $data['punchline'],
            'setup' => $data['setup'],
            'category_id' => $data['category_id'],
            'author_id' => $user->id, 
        ]);

        $joke->category; 
        $joke->author; 

        return response($joke);
    }

    /**
     * Display the specified resource.
     */
    public function show(Joke $joke)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJokeRequest $request, Joke $joke)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Joke $joke)
    {
        //
    }
}
