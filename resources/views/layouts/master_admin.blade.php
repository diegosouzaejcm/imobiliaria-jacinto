<html>

<head>
    <title>@yield('title') - Sua Casa Sua Vida</title>

    @yield('head')

</head>

<body>



@section('navbar')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-logo" href="<?php echo url('/');?>"><img src="{{asset('logo.png')}}"  width="200px" alt="Logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav menuzao">
                    <li><a  href = "{{ url('/')}}">Home</a></li>
                    <li><a  href = "<?php echo url('imoveis');?>">Imóveis</a></li>
                    <li><a  href = "<?php echo url('quemsomos');?>">Quem somos</a></li>
                    <li><a  href = "{{url('admin')}}">Perfil</a></li>

                </ul>
                <ul  class="nav navbar-nav navbar-right">
                    <li></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Conta</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 align="center"><a href = "{{ action('Auth\AuthController@getLogout') }}"><button type="button"  class="btn btn-primary btn-block">Logout</button></a></h4><br>
                                    </div>
                                    <div class="bottom text-center">
                                        Usuários<br><br> <a href = "{{ url('admin/users') }}"><button type="button"  class="btn btn-primary btn-block">Administrar</button></a>
                                    </div>

                                </div>

                            </li>

                        </ul>

                    </li>

                </ul>

            </div><!--/.nav-collapse -->

        </div>

    </nav>


    <br><br><br>


@show




<div class="container">
    @yield('content')
</div>



@section('footer')

    <footer>

        <div class="row">

            <!--<h4 align="center" id="texto">Mapa do site</h4>--> <br>

            <div class="col-md-2 col-md-offset-2 col-xs-6 ">

                <div id="texto">Menu</div>

                <a href = "<?php echo url('/');?>">Home</a><br>
                <a href = "<?php echo url('imoveis');?>">Imóveis</a><br>
                <a href = "<?php echo url('quemsomos');?>">Quem somos</a><br>
                <a href = "<?php echo url('contato');?>">Contato</a><br><br>

            </div>


            <div class="col-md-2  col-xs-6" >

                <div id="texto">Imóveis</div>

                <a href = "<?php echo url('imoveis');?>">À venda</a><br>
                <a href = "<?php echo url('imoveis');?>">Aluguel</a><br>
                <a href = "<?php echo url('imoveis');?>">Avaliação</a><br>
                <a href = "<?php echo url('imoveis');?>">Em construção</a><br><br>

            </div>


            <div class="col-md-2 col-xs-6" >

                <div id="texto">Quem somos</div>

                <a href = "<?php echo url('quemsomos');?>">Nossa história</a><br>
                <a href = "<?php echo url('quemsomos');?>">Parceiros</a><br>
                <a href = "<?php echo url('quemsomos');?>">Localização</a><br>
                <a href = "<?php echo url('quemsomos');?>">Nossa trajetória</a>

            </div>


            <div class="col-md-2 col-xs-6" >

                <div id="texto">Contatos</div>

                <a href = "<?php echo url('contato');?>">Email</a><br>
                <a href = "<?php echo url('contato');?>">Reserve</a><br>
                <a href = "<?php echo url('contato');?>">Agende sua visita</a><br>
                <a href = "<?php echo url('contato');?>">Telefones</a><br><br>

            </div>


        </div>

        <div class="row" id="pezin">

            <br>
            <div class="col-md-7 col-md-offset-1" align="left" id="copyright">

                Copyright © 2015 Sua Casa Sua Vida Imobiliária - Todos os direitos reservados.

            </div>

            <div class="col-md-3" align="right" id="copyright">

                <div id="real">Realização:<img src="{{asset('EJCMnuvem.png')}}" width="60px" alt="Logo" heigth="60px"></div>

            </div>
        </div>

    </footer>

@show

@yield('java')

</body>

</html>