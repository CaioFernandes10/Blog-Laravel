<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    function index()
    {

        $fornecedores = [

            0 => [
                'nome' => 'cliente0',
                'status' => 'N',
                'cnpj' => '102030-00',
                'DDD' => '21',
                'telefone' => '990111709',
                'endereco' => [ 
                    'rua' => 'rua teste',
                    'cep' => '21031710',
                    'bairro' => 'Ramos'
                ]

            ],
            1 => [
                'nome' => 'cliente1',
                'status' => 'S',
                'cnpj' => '222222-00',
                'DDD' => '11',
                'telefone' => '733311709',
                'endereco' => [ 
                    'rua' => 'rua teste1',
                    'cep' => '21031711',
                    'bairro' => 'Ilha'
                ]


                
            ],
            2 => [
                'nome' => 'cliente2',
                'status' => 'S',
                'cnpj' => '222222-00',
                'DDD' => '85',
                'telefone' => '9999999999',
                'endereco' => [ 
                    'rua' => 'rua teste',
                    'cep' => '21031712',
                    'bairro' => 'Bonsucesso'
                ]

                
            ],     



        ];

       echo isset($fornecedores[1]['cnpj']) ? "existe cnpj" : "nao existe cnpj";
            

        return view('paginas.fornecedor', compact('fornecedores'));
    }
}
