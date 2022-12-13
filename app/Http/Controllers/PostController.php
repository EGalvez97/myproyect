<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {

        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
        /*if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('public/img/', $filename);
        } */
        
        $file = $request->file('imagen');
        echo $path = Storage::putFile('imagen', $file);

        return to_route('posts.index')->with('status', 'Post created!');
    }

   /* public function storeimage(Request $request)
    {
        $file = $request->file('image');
        echo $path = Storage::putFile('images', $request->file('image'));
    }*/

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('status', 'Post deleted');
    }
}
