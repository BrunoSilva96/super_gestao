<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){

      $motivo_contatos = MotivoContato::all();

      return view('site.contato', [ 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){

        //  $contato->nome = $request->input('nome');
        //  $contato->telefone = $request->input('telefone');
        //  $contato->email = $request->input('email');
        //  $contato->motivo_contato = $request->input('motivo_contato');
        //  $contato->mensagem = $request->input('mensagem');

        //  $contato->save();

      $request->validate([
        'nome' => 'required|min:3|max:40|unique:site_contatos',
        'telefone' => 'required',
        'email' => 'email',
        'motivo_contatos_id' => 'required',
        'mensagem' => 'required|max:2000'
      ]);

      SiteContato::create($request->all());

      return redirect()->route('site.index');
    }
}
