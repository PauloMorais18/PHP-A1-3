<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['titulo', 'descricao'];

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'matriculas')
                    ->withPivot('data_matricula')
                    ->withTimestamps();
    }
}
