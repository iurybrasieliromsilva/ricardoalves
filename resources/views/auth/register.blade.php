@extends('layouts.layout')

@section('content')
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1>Cadastro</h1>
            </div>
        </div>
        <hr />
        @if (\Session::has('error'))
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                        <strong>{{ \Session::get('error') }}</strong>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-6">
                {{ Form::open(['route' => 'auth.create', 'files' => true]) }}
                    <div class="form-group">
                        {{ Form::label('name', 'Nome') }}
                        {{ Form::text('name', old('name'), ['class' => 'form-control']) }}
                        @if ($errors->first('name'))
                            <p class="text-danger">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'E-mail') }}
                        {{ Form::email('email', old('email'), ['class' => 'form-control']) }}
                        @if ($errors->first('email'))
                            <p class="text-danger">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Senha') }}
                        {{ Form::password('password', ['class' => 'form-control']) }}
                        @if ($errors->first('password'))
                            <p class="text-danger">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('photo_profile', 'Foto de Perfil') }}
                        <div class="custom-file">
                            {{ Form::file('photo_profile', ['class' => 'custom-file-input', 'id' => 'photo_profile']) }}
                            {{ Form::label('Selecione uma foto', '', ['class' => 'custom-file-label']) }}
                        </div>
                        @if ($errors->first('photo_profile'))
                            <p class="text-danger">
                                {{ $errors->first('photo_profile') }}
                            </p>
                        @endif
                    </div>
                    {{ Form::submit('Cadastrar-me', ['class' => 'btn btn-secondary']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection