<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(string $nome = 'Visitante',int $categoria_id = 1){
        return view('site.principal', ['nome' => $nome, 'categoria' => $categoria_id, 'home' => 'Home']);
        //$dados = ['nome' => $nome, 'categoria' => $categoria_id];
        // Colcoar dentro de um array e passa no return
        //return view('siteprincipal', $dados)
    }               
}
