<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;

class PrincipalController extends Controller
{
    public function principal(string $nome = 'Visitante',int $categoria_id = 1){
        $motivo_contatos = MotivoContato::all();

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
        //$dados = ['nome' => $nome, 'categoria' => $categoria_id];
        // Colcoar dentro de um array e passa no return
        //return view('siteprincipal', $dados)
    }               
}
