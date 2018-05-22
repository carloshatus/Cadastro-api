<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->date('data_nascimento');
            $table->string('estado_civil')->nullable();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('telefone');
            $table->string('nome_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('cpf');
            $table->string('rg');
            $table->string('titulo')->nullable();
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
        Schema::dropIfExists('cadastros');
    }
}
