<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContato;
use Illuminate\Support\Facades\DB;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $contato = new SiteContato();
        // $contato->nome = 'contato$contato 100';
        // $contato->telefone = '(73) 98988-8888';
        // $contato->email = 'contato$contato@email.com';
        // $contato->motivo_contato = '1';
        // $contato->mensagem = 'Vamo ve se ta dando tudo certo!';
        // $contato->save();

        \App\Models\SiteContato::factory()->count(30)->create();
    }
}
