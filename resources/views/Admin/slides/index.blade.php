@extends('layouts.master_admin')


@section('title', 'Slides')

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
            <h1>Slides</h1>
        </div>

        <a href = "<?php echo url('admin/slides/create');?>">
            <button type="button" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Adicionar um novo slide
            </button></a>
        <br><br><br>

        <div class="container">
            <div class="table-responsive">
                <table class="table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Posição</th>
                            <th>Imagem</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($slides as $slide)

                            <tr>
                                <td>{{$slide->id}}</td>
                                <td>{{$slide->posicao}}</td>
                                <td>{{$slide->imagem}}</td>

                                <td>
                                    <button type="button" class="btn btn-default btn-lg">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar
                                    </button>
                                    <br><br>
                                </td>

                                <td>
                                    <a href="{{ action ('SlidesController@destroy', [$slide->id]) }}">
                                        <button type="button" value="remove" class="btn btn-danger btn-lg">
                                            <span class="glyphicon glyphicon-trash" id='eliminar' aria-hidden="true"></span> Eliminar
                                        </button>
                                    </a>
                                    <br><br>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>

        <div align="center">

            <?php echo $slides->render();?>

        </div>

        <br><br>

    </div> <!-- /container da home -->

@endsection



@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection