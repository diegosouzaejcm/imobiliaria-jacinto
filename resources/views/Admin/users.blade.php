@extends('layouts.master_admin')


@section('title', 'Usuários')

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
            <h1>Usuários</h1>
        </div>

        <div class="container">
            <div class="table-responsive">
                <table class="table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($users as $user)
                            <div class="linha">

                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->telefone}}</td>
                                    <td>
                                        <a href="{{ action ('UsuariosController@destroy', [$user->id]) }}">
                                                <button type="button" value="remove" class="btn btn-danger btn-lg">
                                                <span class="glyphicon glyphicon-trash" id='eliminar' aria-hidden="true"></span> Eliminar
                                                </button>
                                        </a>
                                    </td>
                                </tr>

                            </div>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>

        <div align="center">

            <?php echo $users->render();?>

        </div>

        <br><br>

    </div> <!-- /container da home -->
@endsection



@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection