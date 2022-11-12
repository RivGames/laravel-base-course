@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="row">{{$post->id}}</div>
            <div class="row">{{$post->title}}</div>
            <div class="row">{{$post->content}}</div>
            <hr>
    </div>
@endsection
