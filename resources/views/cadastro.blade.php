

@extends('layouts.template')


@section('title', 'Cadastro')

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

@section('navbar')




@section('content')

    <div id="corpo" class="container theme-showcase" role="main"><br>



        <div class="page-header">
            <h1 align="center">Imobiliária Sua Casa, Sua Vida</h1>
            <h3 align="center"><i>"Não vendemos casas, vendemos sonhos."</i></h3>
        </div>


        <section id="formulario">


            <h4><strong>Seja bem vindo ao site da Imobiliária Sua Casa Sua Vida</strong></h4><br>
            <h2><strong><u>Cadastre-se</u></strong></h2>

            <div class="row">

                <!-- a ideia era criar uma página mais amigável/carismática, consegui fazer o caralho do recaptcha ficar que nem gente na posição certa-->


            </div>
            <br>
            <p><strong>Após o cadastro, você poderá favoritar e reservar nossos imóveis. Fique por dentro das melhores ofertas de imóveis do Rio de Janeiro.</strong></p>
            <br><p>Preencha os campos abaixo: </p>

            <div class="row">

                <form action="{{ action ('UsuariosController@store') }}" method="post">

                    {!! csrf_field() !!}

                    <div class="col-sm-6 col-md-5 col-md-offset-1">

                        <br>
                        <label for="name">Nome:</label>
                        <br>
                        <input type="text" name="name"  class="form-control" id="name" size="38" autofocus placeholder="  ex: Roberto Silva">
                        @if($errors->has('name'))
                            <ul class="alert alert-danger">
                                <li>Digite um nome com pelo menos 3 caracteres</li>
                            </ul>
                        @endif

                        <br><br>

                        <label for="email">Email:</label>
                        <br>
                        <input type="text" name="email" class="form-control" id="email" size="38" placeholder="  ex: joao@ninguem.com">
                        @if($errors->has('email'))
                            <ul class="alert alert-danger">
                                <li>Digite um email válido</li>
                            </ul>
                        @endif

                        <br><br>
                        <label for="telefone">Telefone:</label>
                        <br>
                        <input type="text" name="telefone" class="form-control" id="telefone" size="38" placeholder="  ex: (21)4002-8922">
                        @if($errors->has('telefone'))
                            <ul class="alert alert-danger">
                                <li>Digite um telefone válido</li>
                            </ul>
                        @endif

                        <br><br>



                        <br>

                    </div>

                    <div class="col-sm-6 col-md-5">

                        <br>
                        <label for="password">Senha:</label>
                        <br>
                        <input type="password" name="password" class="form-control" id="password" size="38" autofocus placeholder="  ex: senha123">
                        @if($errors->has('password'))
                            <ul class="alert alert-danger" >
                                <li>Sua senha não confere </li>
                            </ul>
                        @endif

                        <br>

                        <br>
                        <label for="password_confirmation">Confirme sua senha:</label>
                        <br>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" size="38" autofocus placeholder="  ex: senha123" >
                        @if($errors->has('password_confirmation'))
                            <ul class="alert alert-danger">
                                <li>Sua senha difere do campo anterior </li>
                            </ul>
                        @endif

                        <br><br>

                        <!-- </div>

                         <div class="col-sm-6 col-md-4">-->

                        <div class="g-recaptcha" data-sitekey="6LecGwsTAAAAABx1WrRA3sLx6wembXsAuTlkbHx7"></div>

                        <br>

                        <input id="botao" type="submit" value="Enviar">

                        <br><br><br><br><br><br><br>

                    </div>

                </form>



            </div>

        </section>


    </div> <!-- /container -->

@endsection

@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection