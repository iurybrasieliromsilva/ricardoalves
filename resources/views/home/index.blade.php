@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <section id="home">
            <div class="row bg-dark" style="min-height: 100vh;">
                <div class="col text-center text-white">
                    <h1 class="typed"></h1>
                </div>
            </div>
        </section>

        <section id="recentes">
            <div class="row p-3">
                <div class="col">
                    <h1>Publicações Recentes</h1>
                </div>
            </div>
            <hr />
            <div class="row">
                @for($i = 0; $i <= 6; $i++)
                <div class="col-md-4 p-2">
                    <div class="card">
                        <img class="card-img-top" src="http://www.mediotejo.net/wp-content/uploads/2017/01/fotografia-DR.jpg" alt="">
                        <div class="card-body text-right">
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
                        <div class="card-footer text-right">
                            <a href="" class="card-link">
                                Comentarios
                                <span class="badge badge-info">4</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </section>

        <section id="sobre">
            <div class="row bg-dark text-white" style="min-height: 90vh;">
                <div class="col">
                    <div class="row">
                        <div class="col p-4 pl-5">
                            <h1>Quem sou?</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 text-center  reveal-top">
                            <img class="img-fluid rounded" src="https://lh4.googleusercontent.com/-tVENZg3X0gY/AAAAAAAAAAI/AAAAAAAAQlA/CXHxpYvkPmA/il/photo.jpg" alt="Ricardo Alves">
                        </div>
                        <div class="col-md-6 reveal-left">
                            <p class="">
                                <h1>Ricardo Alves</h1>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum voluptate alias nemo fugit blanditiis error rem id deserunt? Amet dolorum ipsum id fugiat culpa quos quaerat corrupti ratione a cumque.
                                Cumque quam dolores architecto velit porro quasi esse ut quod possimus, id rerum error, sequi, optio dicta fugit aliquam veritatis quidem deserunt aspernatur eaque. Iusto enim rerum cupiditate omnis saepe!
                                Nostrum sint illum impedit iure ipsum recusandae quos quia velit magnam fuga rerum repellat perspiciatis beatae ea, quis aspernatur amet commodi voluptas voluptate illo voluptatum ut? Quam illum nulla sapiente!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contatos">
            <div class="row p-2">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <h1>Contato</h1>
                        </div>
                    </div>
                    <hr />
                    <div class="row d-flex justify-content-around">
                        <div class="col-md-5 shadow-lg p-3">
                            {!! Form::open() !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Nome') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'E-mail') !!}
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('message', 'Mensagem') !!}
                                {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => '4']) !!}
                            </div>
                            {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr />
        <section id="redes">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Siga-me nas redes sociais</h1>
                </div>
                <div class="col-lg-12">
                    <a href="http://facebook.com/profile.php?id=100003652417842" class="text-dark" target="_blanck">
                        <i class="fab fa-facebook fa-5x p-4"></i>
                    </a>
                    <a href="http://twitter.com.br" class="text-dark" target="_blanck">
                        <i class="fab fa-twitter-square fa-5x p-4"></i>
                    </a>
                    <a href="http://instagram.com/ricardo.fotografia" class="text-dark" target="_blanck">
                        <i class="fab fa-instagram fa-5x p-4"></i>
                    </a>
                </div>
            </div>
        </section>

        <section id="footer">
            <div class="row bg-dark text-white">
                <div class="col text-center">
                    <p class="p-4">
                        Desenvolvido por Iury Brasileiro
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/typed.min.js') }}"></script>
    <script src="{{ asset('js/scrollReveal.js') }}"></script>
    <script>
        var typed = new Typed(".typed", {
            strings: ["Ricardo Alves <br />", "Ricardo Alves <br /> Fotografia."],
            typeSpeed: 80,
            backSpeed: 50,
            smartBackspace: true,
            loop: true,
            cursorChar: ""
        });

        ScrollReveal().reveal('.reveal-top', {
            distance: '100%',
            origin: 'top',
            opacity: 0,
            delay: 300,
            reset: true
        });

        ScrollReveal().reveal('.reveal-left', {
            distance: '100%',
            origin: 'left',
            opacity: 0,
            delay: 600,
            reset: true
        });
    </script>
@endpush