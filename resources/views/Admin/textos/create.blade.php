@extends('layouts.master_admin')


@section('title', 'Descrição')

@section('head')

    <link rel="stylesheet" href="{{asset('libs/bootstrap/css/bootstrap.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image" href="{{asset('icone7.png')}}" />

    <!-- Bootstrap core CSS -->
    <link href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="{{asset('libs/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

@endsection

@yield('navbar')


@section('content')

    <div id="corpo" class="container theme-showcase" role="main"><br>


        <div class="page-header">
            <h1 align="center">Imobiliária Sua Casa, Sua Vida</h1>
            <h3 align="center"><i>"Não vendemos casas, vendemos sonhos."</i></h3>
        </div>


        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Bem-vindo, Admin</h1>
        </div>

        <div class="page-header">
            <h1>Publique uma descrição:</h1>
        </div>

        <br><p>Preencha os campos abaixo: </p>

        <div class="row">

            <form action="{{ action ('TextController@store') }}" method="post">

                {!! csrf_field() !!}

                <div class="col-sm-6 col-md-5 col-md-offset-1">

                    <br>
                    <label for="titulo">Titulo:</label>
                    <br>
                    <input type="text" name="titulo"  class="form-control" id="titulo" size="38" autofocus placeholder="  Titulo">
                    <br><br>

                    <label for="conteudo">Conteudo:</label>
                    <br>
                    <textarea type="text" name="conteudo" class="form-control" id="conteudo" size="300" placeholder="  Insira seu texto"></textarea><br><br>
                    <button type="submit" class="btn btn-default" id="publicar">
                        <span class="glyphicon glyphicon-cog"  aria-hidden="true"></span>  Publicar</button>
                    <!--<input id="botao" type="submit" value="Enviar"><br><br>-->
                    <br><br><br><br>

                </div>
            </form>


            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors -> all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </div> <!-- /container da home -->
    </div>
@endsection

@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection