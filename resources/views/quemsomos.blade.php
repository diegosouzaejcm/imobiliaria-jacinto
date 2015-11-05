
    @extends('layouts.template')


@section('title', 'Quem somos')

@section('head')

    <link rel="stylesheet" href="{{asset('libs/bootstrap/css/bootstrap.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="icone7.png" />

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Bootstrap core CSS -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="libs/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

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

        @foreach($texts as $text)

            @if ( $text->id == 2 )

                <div class="jumbotron">

                    <h1>{{$text->titulo}}</h1>
                    <p>{{$text->conteudo}}</p>
                </div>
        @endif

                @if ( $text->id > 2 )

        <div class="page-header">
            <h1>{{$text->titulo}}</h1>
        </div>
        <div class="well">
            <p>{{$text->conteudo}}</p>
        </div>
                @endif

        @endforeach

        <br><br>

    </div> <!-- /container -->


@endsection


@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection