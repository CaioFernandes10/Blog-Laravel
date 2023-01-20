<?php

namespace Database\Seeders;

use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        \App\Models\SiteContato::factory()->count(100)->create();
            

        // db::table('site_contatos')->insert(
        //     [
        //         'nome'=>'FornecedorTeste',
        //         'email'=>'for@gmail.com',
        //         'telefone' => '(21)9999999999',
        //         'mensagem' => 'teste do seeder',
        //         'motivo_contato'=> 2
        //     ]
                
        //    );
    }
}
