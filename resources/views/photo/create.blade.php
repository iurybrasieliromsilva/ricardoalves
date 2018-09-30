@extends('layouts.layout')

@section('content')
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1>Cadastrar nova imagem.</h1>
            </div>
        </div>
        <hr />
        <div class="row justify-content-center">
            <div class="col-lg-6">
                {{ Form::open(['route' => 'photo.store', 'files' => true]) }}
                    <div class="form-group">
                        {{ Form::label('title', 'Titulo') }}
                        {{ Form::text('title', old('title'), ['class' => 'form-control']) }}
                        @if ($errors->first('title'))
                            <p class="text-danger">
                                {{ $errors->first('title') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Descrição') }}
                        {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'rows' => '3']) }}
                        @if ($errors->first('description'))
                            <p class="text-danger">
                                {{ $errors->first('description') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('author', 'Autor') }}
                        {{ Form::text('author', old('author'), ['class' => 'form-control']) }}
                        @if ($errors->first('author'))
                            <p class="text-danger">
                                {{ $errors->first('author') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('image', 'Foto') }}
                        <div class="custom-file">
                            {{ Form::file('image', ['class' => 'custom-file-input', 'id' => 'customFile']) }}
                            {{ Form::label('custom-file-customFile', 'Choose File', ['class' => 'custom-file-label']) }}
                        </div>
                    </div>
                    {{ Form::submit('Cadastrar', ['class' => 'btn btn-secondary']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection