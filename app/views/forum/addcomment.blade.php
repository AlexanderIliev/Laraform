@extends('layouts.master')

@section('head')
    @parent
    <title>New Comment</title>

@stop

@section('content')
    <h1>Add Comment</h1>
        {{ Form::open(array('route' => array('forum-store-new-comment', $id))) }}

    <div class="form-group">
        {{ Form::label('body', 'Body: ') }}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'id' => 'body' )) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Post Comment', array('class' => 'btn btn-primary')) }}
    </div>
        {{ Form::close() }}
@stop