<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'BA';
        $fornecedor->email = 'fornecedor@email.com';
        $fornecedor->save();

        //utilizando metodo create (atenção para o atributo fillabel da classe)
        Fornecedor::create([
            'nome' => 'fornecedor200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'SP',
            'email' => 'fornecedor200@email.com'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'fornecedor300',
            'site' => 'fornecedor300.com.br',
            'uf' => 'RJ',
            'email' => 'fornecedor300@email.com',
        ]);
    }
}
