@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row"><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></div>
        @endforeach
    </div>
@endsection
