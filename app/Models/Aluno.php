<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // use HasFactory;
    protected $table = 'alunos';

    public function curso(){
        return $this->hasOne(Curso::class, 'id');
    }
}
