
    @extends('layouts.template')


@section('title', 'Contato')

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


        <section id="formulario">


            <h2><strong><u>Contatos</u></strong></h2><br>

            <div class="row">

                <div class="col-sm-6 col-md-4">

                    <img src="home.png" width="20px" alt="Endereco" heigth="20px"> Rua Tenente Marodoro, 153 - Canto do Fim<br> Rio de Janeiro - RJ<br><br>

                </div>

                <div class="col-sm-6 col-md-4">

                    <img src="email.png" width="20px" alt="Email" heigth="20px"> suacasasuavida@imob.com.br<br><br>

                </div>

                <div class="col-sm-6 col-md-4">

                    <img src="phone.png" width="20px" alt="Telefone" heigth="20px">( 21 ) 2569-6969<br><br>

                </div>


            </div>

            <p><strong>Ou, se preferir,<br>Contate-nos por aqui</strong></p>

            <div class="row">

                <form action="{{ action ('ContatoController@store') }}" method="post">

                    {!! csrf_field() !!}


                    <div class="col-sm-6 col-md-4">

                        <br>
                        <label for="Nome">Insira seu nome:</label>
                        <br>
                        <input type="text" name="Nome" id="Nome" size="38" autofocus placeholder="  ex: Roberto Silva">

                        @if($errors->has('Nome'))
                            <ul class="alert alert-danger contacterror" >
                                Digite um nome com pelo menos 3 caracteres
                            </ul>
                        @endif

                        <br><br><br>
                        <label for="Telefone">Telefone:</label>
                        <br>
                        <input type="text" name="Telefone" id="Telefone" size="38" autofocus placeholder="  ex: ( 21 ) 4002-8922">

                        @if($errors->has('Telefone'))
                            <ul class="alert alert-danger contacterror" >
                                Digite um número de telefone válido
                            </ul>
                        @endif
                        <br><br>

                    </div>

                    <div class="col-sm-6 col-md-4">

                        <br>
                        <label for="Email">Insira seu email:</label>
                        <br>
                        <input type="text" name="Email" id="Email" size="38" placeholder="  ex: joao@ninguem.com">
                        @if($errors->has('Email'))
                            <ul class="alert alert-danger contacterror">
                                Digite um email válido
                            </ul>
                        @endif
                        <br><br><br>
                        <label for = "Assunto">Assunto</label>
                        <br>

                        <div class="row">

                            <div class="col-md-6">

                                <input type="radio" name = "Assunto" id="Duvidas" value="Duvidas"><label for="Duvidas">Dúvidas</label></input><br>
                                <input type="radio" name = "Assunto" id="Reservas" value="Reservas"><label for="Reservas">Reservas</label></input><br>
                                <input type="radio" name = "Assunto" id="Avaliar" value="Avaliação"><label for="Avaliar">Avalição</label></input><br>

                            </div>

                            <div class="col-md-6">

                                <input type="radio" name = "Assunto" id="Visitar" value="Marcar visita"><label for="Visitar">Marcar visita</label></input><br>
                                <input type="radio" name = "Assunto" id="Infos" value="Infos"><label for="Infos">Informações</label></input><br>
                                <input type="radio" name = "Assunto" id="Outro" value="Outros"><label for="Outro">Outros</label></input><br>

                            </div>

                            @if($errors->has('Assunto'))
                                <ul class="alert alert-danger contacterror" >
                                    Escolha um dos assuntos acima
                                </ul>
                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4">

                        <br>
                        <label for="Mensagem">Mensagem:</label>
                        <br>
                        <textarea id="Mensagem" ng-model="activity.description" name="Mensagem" placeholder="  Digite aqui sua mensagem"></textarea>

                        @if($errors->has('Mensagem'))
                            <ul class="alert alert-danger contacterror" >
                                Digite uma mensagem com pelo menos 5 caracteres
                            </ul>
                        @endif

                        <br><br>

                        <div class="g-recaptcha" data-sitekey="6LecGwsTAAAAABx1WrRA3sLx6wembXsAuTlkbHx7"></div>

                        <br>

                        <input id="botao" type="submit" value="Enviar">

                        <br><br><br><br><br><br><br>

                    </div>

                </form>

            </div>

        </section>


    </div> <!-- /container do contato-->

@endsection



@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

    @endsection
