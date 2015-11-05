
    @extends('layouts.template')


@section('title', 'Perfil')

@section('head')

    <link rel="stylesheet" href="{{asset('libs/bootstrap/css/bootstrap.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="icone7.png" />

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="{{asset('libs/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">

@endsection


@yield('navbar')


@section('content')

    <div id="corpo" class="container theme-showcase" role="main"><br>



        <div class="page-header">
            <h1 align="center">Imobiliária Sua Casa, Sua Vida</h1>
            <h3 align="center"><i>"Não vendemos casas, vendemos sonhos."</i></h3>
        </div>
        <br><br>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">

            <h1>Bem vindx,  </h1>

            Testar amanhã 20/08
        </div>

        <div>
            
        </div>

    </div> <!-- /container -->

@endsection



@yield('footer')


@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection