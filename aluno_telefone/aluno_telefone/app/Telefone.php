<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    public function alunos()
    {
        return $this->belongsTo('App\Aluno', 'aluno_id');
    }
}
