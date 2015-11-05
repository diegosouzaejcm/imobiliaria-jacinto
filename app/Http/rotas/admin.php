<?php

Route::get('/admin', function () {
    return view('admin.home',array('user'=>"Administrador",'ip'=>'Meu IP'));
});