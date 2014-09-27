@extends('layouts.master')

@section('head')
    @parent
    <title>Register</title>
@stop

@section('content')
        <h1>Register</h1>

        {{Form::open(['route' => 'postCreate'])}}

        <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
            {{Form::label('username', 'Username: ');}}
            {{Form::text('username', null, ['class' => 'form-control'])}}
            @if($errors->has('username'))
                {{ $errors->first('username') }}
            @endif
        </div>

        <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
            {{Form::label('email', 'Email: ');}}
            {{Form::email('email', null, ['class' => 'form-control'])}}
            @if($errors->has('email'))
                {{ $errors->first('email') }}
            @endif
        </div>

        <div class="form-group {{ ($errors->has('pass1')) ? 'has-error' : '' }}">
            {{Form::label('pass1', 'Password: ');}}
            {{Form::password('pass1', ['class' => 'form-control'])}}
            @if($errors->has('pass1'))
                {{ $errors->first('pass1') }}
            @endif
        </div>

        <div class="form-group {{ ($errors->has('pass2')) ? 'has-error' : '' }}">
            {{Form::label('pass2', 'Confirm Password: ');}}
            {{Form::password('pass2', ['class' => 'form-control'])}}
            @if($errors->has('pass2'))
                {{ $errors->first('pass2') }}
            @endif
        </div>

        <div class="form-group">
            {{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
        </div>

        {{Form::close()}}

@stop