@extends('layouts.layout')

@section('content')
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1>Login</h1>
            </div>
        </div>
        <hr />
        <div class="row justify-content-center">
            <div class="col-lg-6">
                {{ Form::open(['route' => 'auth.authenticate']) }}
                    <div class="form-group">
                        {{ Form::label('email', 'E-mail') }}
                        {{ Form::email('email', old('email'), ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Senha') }}
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>
                    {{ Form::submit('Entrar', ['class' => 'btn btn-secondary']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection