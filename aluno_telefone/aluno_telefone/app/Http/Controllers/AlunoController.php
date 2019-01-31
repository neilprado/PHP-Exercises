<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = \App\Aluno::all();
        return view('index');
    }

    public function add(Request $request)
    {
        $nome = $request->input('nome');
        $mat = $request->input('matricula');
        $aluno = new \App\Aluno;
        $aluno->nome = $nome;
        $aluno->matricula = $mat;
        $aluno->save();

        $telefone = new \App\Telefone;
        $telefone->numero = $request->input('numero');        
        $aluno->telefones()->save($telefone);
        $aluno->save();
        return view('index',['msg'=>'Aluno cadastrado com sucesso']);
    }
}
