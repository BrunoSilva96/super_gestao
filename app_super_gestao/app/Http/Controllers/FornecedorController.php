<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index () {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor', 
                'status' => 'N', 
                'cnpj' => '23.876.234/859-72'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'N'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
