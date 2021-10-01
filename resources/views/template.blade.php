<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ url(mix('site/css/style.css'))}}">
    <link rel="stylesheet" href="{{ url(mix('site/css/bootstrap.css'))}}">

</head>
<body>
    <header>
        <h1>@yield('title')</h1>
    </header><hr>
    <section>
        @yield('content')

    </section>

    <hr>
    <footer>
        Projeto inteiramente criado por Jeferson Souza
    </footer>
        <script src="{{url(mix('site/js/jquery.min.js'))}}"></script>
        <script src="{{url(mix('site/js/jquery.mask.js'))}}"></script>
        <script src="{{url(mix('site/js/bootstrap.min.js'))}}"></script>
        <script src="{{url(mix('site/js/script.js'))}}"></script>
</body>
</html>