<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'email'];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'matriculas')
                    ->withPivot('data_matricula')
                    ->withTimestamps();
    }
}
