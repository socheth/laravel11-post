<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = auth()->user()->posts()->paginate();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $post = array_merge($data, ['slug' => Str::slug($data['title']), 'user_id' => auth()->user()->id]);

        Post::create($post);

        return to_route('post.index')->with('message', 'Post created success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // $this->authorize('update', $post);

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // $this->authorize('update', $post);

        $data = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $post->updateOrFail($data);

        return view('posts.show', ['post' => $post])->with('message', 'Post updated success.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // $this->authorize('delete', $post);

        $post->delete();

        return to_route('post.index')->with('message', 'Post deleted success.');
    }
}
