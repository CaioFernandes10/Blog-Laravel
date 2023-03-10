<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adicioanndo a coluna motivos_contato_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
            
         });
            //DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');
            
            Schema::table('site_contatos', function (Blueprint $table) {
                $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
                $table->dropColumn('motivo_contato');
            });

            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
        

    }
};
