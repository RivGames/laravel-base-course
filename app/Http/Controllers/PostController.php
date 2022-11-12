<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::where('likes','>',10)->get();
//        $posts = DB::table('posts')->select('title')->where('deleted_at','=',null)->get();
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update($id)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'integer',
        ]);
        $post = Post::find($id);
        $post->update($data);
        return redirect()->route('post.index');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
