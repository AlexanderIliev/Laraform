@extends('layouts.master')

@section('head')
    @parent
    <title>New Thread</title>

@stop

@section('content')
    <h1>New Thread</h1>
        {{ Form::open(array('route' => array('forum-store-thread', $id))) }}
    <div class="form-group">
        {{ Form::label('title', 'Title: ') }}
        {{ Form::text('title', null, array('class' => 'form-control', 'id' => 'title' )) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Body: ') }}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'id' => 'body' )) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Save Thread', array('class' => 'btn btn-primary')) }}
    </div>
        {{ Form::close() }}
@stop