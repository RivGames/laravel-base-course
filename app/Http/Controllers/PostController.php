<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::where('likes','>',10)->get();
        $posts = DB::table('posts')->select('title')->where('deleted_at','=',null)->get();
        foreach ($posts as $post) {
            dump($post);
        }
        return view('index',$posts);
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title2',
                'content' => 'lorem ipsum',
                'image' => 'image1.img',
                'likes' => 30,
                'is_published' => 1,
            ],
            [
                'title' => 'title3',
                'content' => 'lorem ipsum',
                'image' => 'image2.img',
                'likes' => 300,
                'is_published' => 0,
            ]
        ];
        foreach ($postsArr as $post) {
            Post::create($post);
        }
    }

    public function update()
    {
        $post = Post::find(1);
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 0,
            'is_published' => 0
        ]);
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
    }
}
