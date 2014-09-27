@extends('layouts.master')

@section('head')
    @parent
    <title>Login</title>
@stop

@section('content')
<div class="col-md-6 col-md-offset-3">
        <h1>Login</h1>

        {{Form::open(['route' => 'postLogin'])}}

        <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
            {{Form::label('username', 'Username: ');}}
            {{Form::text('username', null, ['class' => 'form-control'])}}
            @if($errors->has('username'))
                {{ $errors->first('username') }}
            @endif
        </div>

        <div class="form-group {{ ($errors->has('pass1')) ? 'has-error' : '' }}">
            {{Form::label('pass1', 'Password: ');}}
            {{Form::password('pass1', ['class' => 'form-control'])}}
            @if($errors->has('pass1'))
                {{ $errors->first('pass1') }}
            @endif
        </div>

        <div class="form-group">
            {{Form::label('remember', 'Remember Me?');}}
            {{Form::checkbox('remember', null, ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
        </div>

        {{Form::close()}}
</div>
@stop