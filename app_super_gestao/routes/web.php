<?php

use Illuminate\Support\Facades\Route;

Route::get(
  '/', [\App\Http\Controllers\PrincipalController::class, 'principal']
);

// Route::get(
//   uma ? apos o nome do parametro {nome?} o torna não obrigatorio.
//   '/{nome}/{categoria_id}', [\App\Http\Controllers\PrincipalController::class, 'principal']
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
Route::get('/login', function(){ return 'Login'; });

Route::prefix('/app')->group(function(){
  Route::get('/clientes', function(){ return 'Clientes'; });
  Route::get('/fornecedores', function(){ return 'Fornecedores'; });
  Route::get('/produtos', function(){ return 'Produtos'; });
});
