@extends('layouts.master_admin')


@section('title', 'Admin')

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




        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
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
                        <td>{{$imovel->descricao}}</td>
                        <td>{{$imovel->localizacao}}</td>
                        <td>{{$imovel->tipo}}/td>
                        <td>{{$imovel->quartos}}</td>
                        <td>{{$imovel->vagas}}</td>
                        <td>{{$imovel->area}}</td>
                        <td>
                            <button type="button" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar
                            </button>
                            <button type="button" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar
                            </button>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
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