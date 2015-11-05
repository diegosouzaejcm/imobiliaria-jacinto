@extends('layouts.master_admin')


@section('title', 'Home')

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
            <h1>Escolha o que deseja editar:</h1>
        </div>


        <ul>
            <li> <h3> <a href="<?php echo url('admin/users');?>">Usuários </a> </h3>  </li>
            <li> <h3> <a href="<?php echo url('admin/imoveis');?>">Imóveis</a> </h3> </li>
            <li> <h3> <a href="<?php echo url('admin/slides');?>">Slideshow</a> </h3> </li>
            <li> <h3> <a href="<?php echo url('admin/textos');?>">Descrição da empresa</a> </h3> </li>
        </ul>



        <br><br>

    </div> <!-- /container da home -->
@endsection



@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection