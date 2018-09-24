@extends('layouts.layout')

@section('content')
    <div class="container p-2">
        <div class="row">
            @forelse ($photos as $photo)
                <div class="col">
                    <div class="col-md-4 p-2">
                        <div class="card">
                            <img class="card-img-top" src="http://www.mediotejo.net/wp-content/uploads/2017/01/fotografia-DR.jpg" alt="">
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
                            <div class="card-footer text-right">
                                <a href="" class="card-link">
                                    
                                    <span class="badge badge-info">4</span>
                                </a>
                            </div>
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