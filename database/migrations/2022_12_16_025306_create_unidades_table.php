<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade',5);
            $table->string('descricao',40);
            $table->timestamps();
            
            

           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // //remover o relacionamento o tabela produto_detalhes
        // Schema::table('produto_detalhes', function (Blueprint $table) {
           
        //     $table->dropForeign('produtos_detalhes_unidades_id_foreign');
        //     $table->dropColumn('unidade_id');
        // });

        //  //remover o relacionamento o tabela produto_

        //  Schema::table('produtos', function (Blueprint $table) {
           
        //     $table->dropForeign('produtos_unidades_id_foreign');
        //     $table->dropColumn('unidade_id');
        // });



        Schema::dropIfExists('unidades');
    }
};
