<!doctype html>
<html lang="pt-br">
    <head>
        <title>Ricardo Alves</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    </head>
    <body>
        <nav class="bg-dark">
            <input type="checkbox" id="nav" class="hidden">
            <label for="nav" class="nav-btn">
                <i></i>
                <i></i>
                <i></i>
            </label>
            <div class="logo">
                <a href="javascript:void(0);">Ricardo Alves</a>
            </div>
            <div class="nav-wrapper">
                <ul>
                    <li><a href="javascript:void(0);">Home</a></li>
                    <li><a href="javascript:void(0);">Fotos</a></li>
                    <li><a href="javascript:void(0);">Videos</a></li>
                    <li><a href="javascript:void(0);">Sobre-min</a></li>
                    <li><a href="javascript:void(0);">Contatos</a></li>
                    <li><a href="javascript:void(0);">Login</a></li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        @stack('script')
    </body>
</html>