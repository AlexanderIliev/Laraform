@extends('layouts.master')

@section('head')
    @parent
    <title>Forum | {{ $thread->title }}</title>
@stop

@section('content')
    <div class="well">
        <h1>{{ $thread->title }}</h1>
        <h4>By: {{ $author }} on {{ $thread->created_at }}</h4>
        <hr>
        <p>{{ nl2br(BBCode::parse($thread->body)) }}</p>
    </div>

@foreach($comments as $comment)
    <div class="well">
        <h4>By: {{ $comment->author_id }} on {{ $comment->created_at }}</h4>
        <hr>
        <p>{{ nl2br(BBCode::parse($comment->body)) }}</p>
    </div>
@endforeach

    <div>
        <a href="{{ URL::route('forum-get-new-comment', $thread->id) }}" class="btn btn-primary btn-sm pull-left">Add Comment</a>
    </div>
@stop