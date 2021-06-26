<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {

            $table->bigIncrements('id')->primary();
            $table->string('matricula');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('uf_nacionalidade');
            $table->string('data_nascimento');
            $table->string('sexo');
            $table->string('raca');
            $table->string('forma_ingresso');
            $table->string('curso');
            $table->string('status');
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
        //
    }
}
