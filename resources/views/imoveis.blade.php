@extends('layouts.template')

@section('title', 'Imóveis')

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

        <div class="row">

            <div class="filtrar">

                <div class="container">

                    <div id="filter-panel" class="collapse filter-panel">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-2 col-md-offset-1 col-xs-4" align="center">


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

                                    </div>

                                    <div class="col-md-2 col-xs-4" align="center">


                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Nº de quartos
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li>&nbsp;&nbsp;<input type="radio" name = "quartos" id="1" value="1"> 1</input><br></li>
                                                <li>&nbsp;&nbsp;<input type="radio" name = "quartos" id="2" value="2"> 2</input><br></li>
                                                <li>&nbsp;&nbsp;<input type="radio" name = "quartos" id="3" value="3"> 3</input><br></li>
                                                <li>&nbsp;&nbsp;<input type="radio" name = "quartos" id="4" value="4"> 4 ou mais</input><br></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-md-2 col-xs-4" align="center">

                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Área
                                                <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <form class="form-inline" role="form">
                                                    <div class="form-group">
                                                        <label for="min-area">&nbsp;&nbsp;De:</label>
                                                        <input type="text" class="form-control " id="min-area" placeholder="ex: 27m²">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="max-area">&nbsp;&nbsp;Até:</label>
                                                        <input type="text" class="form-control" id="max-area" placeholder="ex: 270m²">&nbsp;&nbsp;
                                                    </div>
                                                </form>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-md-2 col-xs-4" align="center">

                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Nº de vagas
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li>&nbsp;&nbsp;<input type="radio" name = "vagas" id="0" value="0"> 0</input><br></li>
                                                <li>&nbsp;&nbsp;<input type="radio" name = "vagas" id="1" value="1"> 1</input><br></li>
                                                <li>&nbsp;&nbsp;<input type="radio" name = "vagas" id="2" value="2"> 2</input><br></li>
                                                <li>&nbsp;&nbsp;<input type="radio" name = "vagas" id="3" value="3"> 3 ou mais</input><br></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-md-2 col-xs-4" align="center">

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

                                    </div>

                                </div>
                                <br><br><br>


                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <label class="filter-col" style="margin-right:0;" for="pref-perpage">Imóveis por página:</label>
                                        <select id="pref-perpage" class="form-control">
                                            <option value="2">4</option>
                                            <option value="3">8</option>
                                            <option selected="selected" value="16">16</option>
                                        </select>
                                    </div> <!-- form group [rows]-->
                                </form>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
                        <span class="glyphicon glyphicon-filter"></span> Filtrar por:
                    </button>
                </div>
                <br>


            </div>

            @foreach($imoveis as $imovel)

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src={{$imovel->img}} alt="" width="300px" height="200px">

                    <div class="caption">

                        <h3>
                            <a  href = "<?php echo url('imoveis');?>">{{$imovel->nome}}</a>
                        </h3>

                        <span class="textin">
                            <p>
                            {{$imovel->descricao}}
                            </p>
                        </span>

                        <!--Ver detalhes-->
                        <div class="botoes">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg detalhes" data-toggle="modal" data-target="#myModal-{{$imovel->id}}">
                                Ver detalhes
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal-{{$imovel->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel" align="center">{{$imovel->nome}}</h4>
                                        </div>

                                        <div class="modal-body">

                                            <div class="container-fluid">
                                                <div class="row">


                                                    <img align="center" src={{$imovel->img}} alt="" width="100%"><br><br>
                                                    Descrição: <br>
                                                    <span class="textin">{{$imovel->descricao}}</span><br><br>

                                                    <div class="col-sm-6 col-md-6">
                                                        Localização: <br>
                                                        <span class="textin">{{$imovel->localizacao}}</span><br><br>
                                                        Tipo de imóvel: <br>
                                                        <span class="textin">{{$imovel->tipo}}</span><br><br>
                                                        Número de quartos: <br>
                                                        <span class="textin">{{$imovel->quartos}}</span><br><br>
                                                    </div>

                                                    <div class="col-sm-6 col-md-6">
                                                        Vagas na garagem: <br>
                                                        <span class="textin">{{$imovel->vagas}}</span><br><br>
                                                        Área total: <br>
                                                        <span class="textin">{{$imovel->area}}</span> m²
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">

                                            {{--favoritar--}}

                                            <button type="button" class="btn btn-primary" id="favoritar">
                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>  Favoritar</button>

                                            {{--reservar--}}

                                            @if($imovel->estado == 0)
                                                <button type="button" class="btn btn-default reservar" imovel="{{$imovel->id}}">
                                                <span class="glyphicon glyphicon-home"  aria-hidden="true"></span>  Reservar</button>                            {{--@endif--}}
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            @endforeach

        </div>

        <div align="center">

            <?php echo $imoveis->render();?>

        </div>

        <br>

    </div> <!-- /container dos imóveis -->

@endsection

@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('libs/jquery/imoveis.js')}}"></script>

@endsection