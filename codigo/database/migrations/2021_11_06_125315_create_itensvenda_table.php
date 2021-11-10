<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensvendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensvenda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quantidade');
            $table->unsignedBigInteger('idproduto');
            $table->unsignedBigInteger('idvenda');
        });

        Schema::table('itensvenda', function (Blueprint $table){
            $table->foreign('idproduto')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('idvenda')->references('id')->on('vendas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itensvenda');
    }
}
