<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = \App\Aluno::all();
        return view('index', ['alunos' => $alunos]);
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
        return redirect('/');
    }

    public function list()
    {
        $alunos = \App\Aluno::orderBy('created_at', 'desc')->get();
        return view('list')->with('alunos', $alunos);
    }

    public function show($id)
    {
        $aluno = \App\Aluno::find($id);
        return view('show')->with('aluno', $aluno);
    }
}
