@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('post.store')}}" method="POST">
                @csrf
                <label for="title">Title</label>
                <input name="title" class="form-control mb-2">
                <label for="content">Content</label>
                <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                <label for="image">Image</label>
                <input name="image" class="form-control mb-2">
                <button type="submit" class="btn btn-primary">Create a post!</button>
            </form>
        </div>
    </div>
@endsection
