<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
           db::table('motivo_contatos')->insert(
            [
                
                'motivo_contato'=>'duvida',
              
                
            ]
                
           );
           db::table('motivo_contatos')->insert(
            [
                
                'motivo_contato'=>'elogio',
              
                
            ]
                
           );
           db::table('motivo_contatos')->insert(
            [
                
                'motivo_contato'=>'RECLAMACAO',
              
                
            ]
                
           );
    }
    }

