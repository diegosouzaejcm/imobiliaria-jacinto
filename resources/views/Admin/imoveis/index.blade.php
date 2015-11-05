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
        <div class="jumbotron">
            <h1>Bem-vindo, Admin</h1>
        </div>


        <div class="page-header">
            <h1>Imóveis</h1>
        </div>

        <a href = "<?php echo url('admin/imoveis/create');?>">
            <button type="button" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Adicionar um novo imóvel
            </button>
        </a>

        <br><br><br>

        <div class="container">

            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Descrição</th>
                            <th>Localização</th>
                            <th>Tipo</th>
                            <th>Quartos</th>
                            <th>Vagas</th>
                            <th>Área</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($imoveis as $imovel)

                            <tr>
                                <td>{{$imovel->id}}</td>
                                <td>{{$imovel->nome}}</td>
                                <td>{{$imovel->img}}</td>
                                <td>{{$imovel->descricao}}</td>
                                <td>{{$imovel->localizacao}}</td>
                                <td>{{$imovel->tipo}}</td>
                                <td>{{$imovel->quartos}}</td>
                                <td>{{$imovel->vagas}}</td>
                                <td>{{$imovel->area}}</td>

                                <td>
                                    <a class="btn btn-default btn-lg" href="{{ URL::to('admin/imoveis/' . $imovel->id . '/edit') }}">
                                        <span class="glyphicon glyphicon-edit" id='eliminar' aria-hidden="true"></span>  Editar
                                    </a>
                                    <br><br>
                                    <a href="{{ action ('ImoveisController@destroy', [$imovel->id]) }}">
                                        <button type="button" value="remove" class="btn btn-danger btn-lg">
                                            <span class="glyphicon glyphicon-trash" id='eliminar' aria-hidden="true"></span> Eliminar
                                        </button></a>
                                    <br><br>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

        <div align="center">

            <?php echo $imoveis->render();?>

        </div>

        <br><br>

    </div> <!-- /container da home -->

@endsection



@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection