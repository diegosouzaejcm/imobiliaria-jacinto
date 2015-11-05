

@extends('layouts.template')

@yield('nav')

@section('title', 'Login')

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


@section('content')

    <form action="{{ action ('Auth\AuthController@postLogin') }}" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div>
            <label for="login">Email</label>
            <input type="email" name="login" value="{{ old('email') }}">
        </div>

        <div>
            <label for="senha">Password</label>
            <input type="password" name="senha" id="password">
        </div>


        <div>
            <button type="submit">Login</button>
        </div>
    </form>

@endsection

@yield('footer')

@section('java')

    <script src="{{asset('libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

@endsection