<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Ola, seja bem vindo';
});

Route::get('/sobre-nos', function () {
    return 'Sobre-nós';
});

Route::get('/contato', function () {
    return 'Contato';
});