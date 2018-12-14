<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
          $table->increments('cod_aluno');
          $table->integer('cod_turma')->unsigned();
          $table->foreign('cod_turma')->references('cod_turma')->on('turma');
          $table->string('nome',45);
          $table->string('pai',45);
          $table->string('mae',45);
          $table->string('sexo',45);
          $table->date('data_nasc');
          $table->integer('telefone')->unsigned();
          $table->string('naturalidade',45);
          $table->string('bairro',45);
          $table->string('rua',45);
          $table->integer('numero')->unsigned();
          $table->string('estado',45);
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
        Schema::dropIfExists('aluno');
    }
}
