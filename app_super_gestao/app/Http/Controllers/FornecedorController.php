<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index () {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor', 
                'status' => 'S', 
                'cnpj' => '23.876.234/859-72',
                'ddd' => '11',
                'telefone' => '000-000'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'N',
                'cnpj' => '',
                'ddd' => '73',
                'telefone' => '000-000'
            ],
            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'N',
                'cnpj' => '',
                'ddd' => '21',
                'telefone' => '000-000'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
