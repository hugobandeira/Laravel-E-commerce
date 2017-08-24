<html>
<head>
    <title>Minha loja</title>
    {{--<link rel="stylesheet" href="{{ asset('/css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    {{--ALERTA--}}
    <link rel="stylesheet" href="{{ asset('/sweet/css/sweetalert2.css') }}">

</head>

<body>
<div class="container">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ action('ProdutoController@index') }}">Minha loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ action('ProdutoController@create') }}">Adicionar novo produto</a></li>
                    <li><a href="{{ action('ProdutoController@store') }}">Lista de produtos</a></li>
                    <li><a href="#">Sobre a Empresa</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>
                            @if(Auth::guest())
                                Sign Up
                            @else
                                {{ Auth::user()->name }}
                            @endif
                        </a></li>
                    <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="top-50">
        @yield('conteudo')
    </div>
</div>
</body>
</html>