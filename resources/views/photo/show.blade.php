@extends('layouts.layout')

@section('content')
    <div class="container p-2">
        <div class="row justify-content-center"> {{-- show photo --}} 
            <div class="col-lg-6">
                <figure class="figure">
                    <img src="http://www.mediotejo.net/wp-content/uploads/2017/01/fotografia-DR.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                </figure>
            </div>
        </div>
        <div class="row justify-content-center"> {{-- Show Title, Description, Author --}}
            <div class="col-lg-6 text-right">
                <h3 class="card-title">Retratos</h3>
                <blockquote class="blockquote">
                    <p class="mb-0">
                            Lorem, ipsum dolor sit amet consectetur earum voluptates animi maxime dolores distinctio molestias atque laboriosam.
                    </p>
                    <footer class="blockquote-footer">
                        Ricardo Alves
                    </footer>
                </blockquote>
            </div>
        </div>
        <hr />
        <div class="row justify-content-center"> {{-- Show Comments --}}
            <div class="col col-lg-6">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3 rounded" src="https://www.aussiespecialist.com/content/asp/en_nz/sales-resources/image-and-video-galleries/_jcr_content/mainParsys/hero/image.adapt.1663.medium.jpg" alt="Generic placeholder image" width="50" height="50">
                        <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                    <li class="media my-4">
                        <img class="mr-3 rounded" src="https://www.aussiespecialist.com/content/asp/en_nz/sales-resources/image-and-video-galleries/_jcr_content/mainParsys/hero/image.adapt.1663.medium.jpg" alt="Generic placeholder image" width="50" height="50">
                        <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded" src="https://www.aussiespecialist.com/content/asp/en_nz/sales-resources/image-and-video-galleries/_jcr_content/mainParsys/hero/image.adapt.1663.medium.jpg" alt="Generic placeholder image" width="50" height="50">
                        <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                </ul>
                <hr />
                <div class="row">
                    <div class="col">
                        {{ Form::open() }}
                            <div class="form-group">
                                {{ Form::label('comment', 'Comentario') }}
                                {{ Form::text('comment', null, ['class' => 'form-control']) }}
                            </div>
                            {{ Form::submit('Comentar', ['class' => 'btn btn-primary']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection