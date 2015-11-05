@extends('layouts.master_admin')


@section('title', 'Imóveis')

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
        <div class="jumbotron">u
            <h1>Bem-vindo, Admin</h1>
        </div>

        <div class="page-header">
            <h1>Adicione um novo imóvel:</h1>
        </div>

        <br><p>Preencha os campos abaixo: </p>

        <div class="row">

            <form action="{{ action ('SlidesController@store') }}" method="post">

                {!! csrf_field() !!}

                <div class="col-sm-6 col-md-5 col-md-offset-1">

                    <br>
                    <label for="posicao">Posição:</label>
                    <br>
                    <input type="text" name="posicao"  class="form-control" id="posicao" size="38" autofocus placeholder="  Posição do slide">

                    @if($errors->has('posicao'))
                        <ul class="alert alert-danger">
                            Digite uma posição para o slide
                        </ul>
                    @endif

                    <br><br>

                    <label for="imagem">Imagem:</label>
                    <br>
                    <input type="text" name="imagem"  class="form-control" id="imagem" size="38" autofocus placeholder="  Imagem.png">

                    @if($errors->has('imagem'))
                        <ul class="alert alert-danger">
                            Digite o nome do arquivo da imagem do imóvel
                        </ul>
                    @endif

                    <br><br>

                    <button type="submit" class="btn btn-success" id="adicionar">
                        <span class="glyphicon glyphicon-plus"  aria-hidden="true"></span>  Adicionar</button>
                    <br><br><br><br>


                </div>

            </form>

        </div> <!-- /container da home -->

    </div>
@endsection

@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection