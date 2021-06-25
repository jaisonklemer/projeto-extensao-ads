<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert(['name' => 'Jaison ', 'email' => "klemerjaison1@gmail.com", 'UF_Nacionalidade'=> 'SC', "Data_Nascimento"=>'11/05/1998',"Sexo"=>'Masculino', "Raca"=>'Branco', "FormaIngresso"=>"Sisu", "Curso"=>"ADS", "Status" => "Cursando"]);
        DB::table('alunos')->insert(['name' => 'Jaison ', 'email' => "klemerjaison2@gmail.com", 'UF_Nacionalidade'=> 'SC', "Data_Nascimento"=>'11/05/1998',"Sexo"=>'Masculino', "Raca"=>'Branco', "FormaIngresso"=>"Sisu", "Curso"=>"ADS", "Status" => "Cursando"]);
        DB::table('alunos')->insert(['name' => 'Jaison ', 'email' => "klemerjaison3@gmail.com", 'UF_Nacionalidade'=> 'SC', "Data_Nascimento"=>'11/05/1998',"Sexo"=>'Masculino', "Raca"=>'Branco', "FormaIngresso"=>"Sisu", "Curso"=>"ADS", "Status" => "Cursando"]);
        DB::table('alunos')->insert(['name' => 'Jaison ', 'email' => "klemerjaison4@gmail.com", 'UF_Nacionalidade'=> 'SC', "Data_Nascimento"=>'11/05/1998',"Sexo"=>'Masculino', "Raca"=>'Branco', "FormaIngresso"=>"Sisu", "Curso"=>"ADS", "Status" => "Cursando"]);

    }
}
