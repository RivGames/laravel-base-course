@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('post.update',$post->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <label for="title">Title</label>
                <input name="title" class="form-control mb-2" value="{{$post->title}}">
                <label for="content">Content</label>
                <textarea name="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                <label for="image">Image</label>
                <input name="image" class="form-control mb-2" value="{{$post->image}}">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
