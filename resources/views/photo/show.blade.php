@extends('layouts.layout')

@section('content')
    <div class="container p-2">
        <div class="row justify-content-center"> {{-- show photo --}} 
            <div class="col-lg-6">
                <figure class="figure">
                    <img src="{{ url('storage/images/'.$photo->name) }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                </figure>
            </div>
        </div>
        <div class="row justify-content-center"> {{-- Show Title, Description, Author --}}
            <div class="col-lg-6 text-right">
                <h3 class="card-title">{{ $photo->title }}</h3>
                <blockquote class="blockquote">
                    <p class="mb-0">
                        {{ $photo->description }}
                    </p>
                    <footer class="blockquote-footer">
                        {{ $photo->author }}
                    </footer>
                </blockquote>
            </div>
        </div>
        <hr />
        <div class="row justify-content-center"> {{-- Show Comments --}}
            <div class="col col-lg-6">
                <ul class="list-unstyled">
                    @forelse ($photo->comments as $comment)
                        <li class="media mt-3 p-2">
                            <img class="mr-3 rounded-circle" src="{{ url('storage/images/'.$comment->user->photo_profile) }}" alt="Generic placeholder image" width="70" height="70">
                            <div class="media-body">
                                <h4 class="mt-0 mb-1">
                                    <strong>{{ $comment->user->name }}</strong>
                                </h4>
                                <p class="lead">
                                    {{ $comment->comment }}
                                </p>
                                <p>{{ \Carbon\Carbon::parse($comment->created_at)->format('d/mm/Y - H:m:s') }}</p>
                                @can('destroy', $comment)
                                    {{ Form::open(['route' => ['comment.destroy', $comment->id], ]) }}
                                        {{ method_field('DELETE') }}
                                        {{ Form::submit('Excluir', ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
                                @endcan
                            </div>
                        </li>
                    @empty
                        
                    @endforelse
                </ul>
                <hr />
                <div class="row">
                    <div class="col-lg-12">
                        @auth
                            {{ Form::open(['route' => 'comment.store']) }}
                                <div class="form-group">
                                    {{ Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::hidden('photo_id', $photo->id, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('comment', 'Comentario') }}
                                    {{ Form::text('comment', null, ['class' => 'form-control']) }}
                                </div>
                                {{ Form::submit('Comentar', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                        @endauth
                        @guest
                            <div class="alert alert-info clearfix" role="alert">
                                <strong class="float-left">Para comentar precisa esta logado.</strong>
                                <strong class="float-right">
                                    <a href="" class="alert-link">Logar</a>
                                    /
                                    <a href="" class="alert-link">Cadastrar</a>
                                </strong>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection