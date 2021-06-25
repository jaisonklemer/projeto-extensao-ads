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

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('UF_Nacionalidade');
            $table->string('Data_Nascimento');
            $table->string('Sexo');
            $table->string('Raca');
            $table->string('FormaIngresso');
            $table->string('Curso');
            $table->string('Status');
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
