<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function telefones()
    {
        return $this->hasMany('App\Telefone', 'aluno_id');
    }
}
