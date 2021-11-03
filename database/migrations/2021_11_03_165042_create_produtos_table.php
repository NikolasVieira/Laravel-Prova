<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tributacao_id");
            $table->unsignedBigInteger("fornecedor_id");
            $table->string("descricao");
            $table->string("preco");
            $table->timestamps();

            $table->foreign('tributacao_id')->references('id')->on('tributacao')->onDelete('CASCADE');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedor')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
