<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Fornecedor;
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
    
        
       db::table('fornecedors')->insert(
        [
            'nome'=>'FornecedorTeste',
            'uf' => 'SP',
            'email'=>'for@gmail.com',
            'site'=> 'for.com.br'
        ]
            
       );
    }
}
