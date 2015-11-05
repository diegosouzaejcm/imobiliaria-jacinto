<?php


Route::any('/','HomeController@view');


Route::get('imoveis','ImoveisController@index');


Route::any('quemsomos', 'QuemSomosController@view');


Route::any('contato', 'ContatoController@view');

    Route::get('contato',
        ["as" => "formContato",
            "uses" => "ContatoController@index"]);

    Route::post('contato',
        ["as" => "enviaContato",
            "uses" => "ContatoController@store"]);


Route::get('cadastro', 'UsuariosController@create');

Route::post('cadastro', 'UsuariosController@store');


Route::get('perfil', 'UsuariosController@show');

Route::post('perfil/{id}', 'UsuariosController@profile');


Route::get('auth/login-nav', 'Auth\AuthController@index');
Route::post('auth/login-nav', 'Auth\AuthController@postLogin');

Route::get('auth/login', 'Auth\AuthController@index');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');


// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


Route::group(['prefix' => 'usuario', 'middleware' => 'auth.basic'], function() {
    Route::post('imoveis_user', 'ImoveisController@reserva');
    Route::any('profile', 'UsuariosController@profile');
});



Route::group(["prefix" => "admin", 'middleware' => 'auth'], function(){


    Route::any('/', 'PerfilAdminController@view');


    Route::any('/users', 'UsuariosController@indexadmin');

    Route::get('/users/{id}', 'UsuariosController@destroy');



    Route::get('/imoveis', 'ImoveisController@indexadmin');

    Route::get('/imoveis/create', 'ImoveisController@create');

    Route::post('/imoveis', 'ImoveisController@store');

    Route::get('/imoveis/{id}/edit', 'ImoveisController@edit');

    Route::post('/imoveis/{id}/edit', 'ImoveisController@update');

    Route::get('/imoveis/{id}', 'ImoveisController@destroy');


    Route::any('/textos', 'TextController@indexadmin');

    Route::get('/textos/create', 'TextController@create');

    Route::post('/textos', 'TextController@store');

    Route::get('/textos/{id}/edit', 'TextController@edit');

    Route::post('/textos/{id}/edit', 'TextController@update');


    Route::get('/slides', 'SlidesController@indexadmin');

    Route::get('/slides/create', 'SlidesController@create');

    Route::post('/slides', 'SlidesController@store');

    Route::get('/slides/{id}', 'SlidesController@destroy');



});
