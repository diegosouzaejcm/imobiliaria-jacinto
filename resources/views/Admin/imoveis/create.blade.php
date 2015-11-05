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
            <h1>Adicione um novo imóvel:</h1>
        </div>

        <br><p>Preencha os campos abaixo: </p>

        <div class="row">

            <form action="{{ action ('ImoveisController@store') }}" method="post">

                {!! csrf_field() !!}

                <div class="col-sm-6 col-md-5 col-md-offset-1">

                    <br>
                    <label for="titulo">Nome:</label>
                    <br>
                    <input type="text" name="nome"  class="form-control" id="nome" size="38" autofocus placeholder="  Nome do imóvel">

                    @if($errors->has('nome'))
                        <ul class="alert alert-danger">
                            Digite um nome para o imóvel
                        </ul>
                    @endif

                    <br><br>

                    <label for="titulo">Imagem:</label>
                    <br>
                    <input type="text" name="img"  class="form-control" id="img" size="38" autofocus placeholder="  Imagem.png">

                    @if($errors->has('img'))
                        <ul class="alert alert-danger">
                            Digite o nome do arquivo da imagem do imóvel
                        </ul>
                    @endif

                    <br><br>

                    <label for="conteudo">Descrição:</label>
                    <br>
                    <textarea type="text" name="descricao" class="form-control" id="descricao" size="300"  maxlength="120" placeholder="  Insira a descrição do imóvel (máximo de 120 caracteres)"></textarea>

                    @if($errors->has('descricao'))
                        <ul class="alert alert-danger">
                            Digite uma descrição para o imóvel
                        </ul>
                    @endif

                    <br><br>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Localidade
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuDivider">
                                    <li>&nbsp;&nbsp;<input type="radio" name = "localizacao" value="Zona Norte" id="norte"> Zona norte</input><br></li>
                                    <li>&nbsp;&nbsp;<input type="radio" name = "localizacao" value="Zona Sul" id="sul"> Zona sul</input><br></li>
                                    <li>&nbsp;&nbsp;<input type="radio" name = "localizacao" value="Zona Oeste" id="oeste"> Zona oeste</input><br></li>
                                    <li>&nbsp;&nbsp;<input type="radio" name = "localizacao" value="Centro" id="centro"> Centro e &nbsp;&nbsp;proximidades</input>&nbsp;&nbsp;<br></li>
                                    <li role="separator" class="divider"></li>
                                    <li>&nbsp;&nbsp;<input type="radio" name = "localizacao" value="Região dos Lagos" id="lagos"> Região dos Lagos</input><br></li>
                                    <li>&nbsp;&nbsp;<input type="radio" name = "localizacao" value="Região Serrana" id="serrana"> Região Serrana</input><br></li>
                                </ul>

                            </div>

                            @if($errors->has('localizacao'))
                                <ul class="alert alert-danger">
                                    Selecione a localidade do imóvel
                                </ul>
                            @endif

                            <br><br>

                        </div>

                        <div class="col-md-6">

                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Imóvel
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li>&nbsp;&nbsp;<input type="radio" name = "tipo" value="Apartamento" id="apartamento"> Apartamento</input><br></li>
                                    <li>&nbsp;&nbsp;<input type="radio" name = "tipo" value="Casa" id="casa"> Casa</input><br></li>
                                </ul>
                            </div>

                            @if($errors->has('tipo'))
                                <ul class="alert alert-danger">
                                    Selecione o tipo do imóvel
                                </ul>
                            @endif

                            <br><br>

                        </div>

                    </div>


                    <label for="quartos">Quartos:</label>
                    <br>
                    <input type="text" name="quartos"  class="form-control" id="quartos" size="10" autofocus placeholder="  Número de quartos do imóvel">

                    @if($errors->has('area'))
                        <ul class="alert alert-danger">
                            Digite a área do imóvel
                        </ul>
                    @endif

                    <br><br>


                    <label for="vagas">Vagas:</label>
                    <br>
                    <input type="text" name="vagas"  class="form-control" id="vagas" size="10" autofocus placeholder="  Número de vagas na garagem do imóvel">

                    @if($errors->has('vagas'))
                        <ul class="alert alert-danger">
                            Digite a área do imóvel
                        </ul>
                    @endif

                    <br><br>


                    <label for="area">Área:</label>
                    <br>
                    <input type="text" name="area"  class="form-control" id="area" size="10" autofocus placeholder="  Área do imóvel (em m²)">

                    @if($errors->has('area'))
                        <ul class="alert alert-danger">
                            Digite a área do imóvel
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