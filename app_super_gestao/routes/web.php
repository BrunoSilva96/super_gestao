<?php

use Illuminate\Support\Facades\Route;

Route::get(
  '/', [\App\Http\Controllers\PrincipalController::class, 'principal']
)->name('site.index');

// Route::get(
//   uma ? apos o nome do parametro {nome?} o torna não obrigatorio.
//   '/{nome}/{categoria_id}', [\App\Http\Controllers\PrincipalController::class, 'principal']
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function(){
  Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
  Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
  Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});

//Route::redirect('/route2', 'route1');
//Redireciona caso nao haja rota

Route::fallback(function() {
  echo 'A rota acessada não existe.<a href="'.route('site.index').'"> clique aqui para ir para a página inicial';
});