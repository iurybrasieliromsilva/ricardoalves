@extends('layouts.layout')

@section('content')
    <div class="container p-2">
        <div class="row">
            <div class="col d-flex flex-row align-items-center justify-content-between">
                <h1 class="">Fotos</h1>
                @auth
                    @can('create', \App\Models\Photo::class)
                        <a class="btn btn-secondary" href="{{ route('photo.create') }}">
                            <i class="fas fa-plus"></i>
                            Cadastrar
                        </a>
                    @endcan
                @endauth
            </div>
        </div>
        <hr>
        <div class="row">
            @forelse ($photos as $photo)
                <div class="col-md-4 p-2">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('storage/images/'.$photo->name) }}" alt="">
                        <div class="card-body text-right">
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
                        <div class="card-footer clearfix">
                            <p class="float-left">{{ \Carbon\Carbon::parse($photo->created_at)->format('d/mm/Y') }}</p>
                            <a href="{{ route('photo.show', ['id' => $photo->id]) }}" class="card-link float-right">
                                Comentarios
                                <span class="badge badge-info">
                                    {{ $photo->comments_count }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-danger" role="alert">
                        <strong> <i class="fas fa-exclamation-triangle"></i> Ops! Ainda não há fotos a serem visualizadas.</strong>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection