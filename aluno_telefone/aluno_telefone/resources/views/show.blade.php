@extends('basis')
@section('content')
    <div class="card">
        <p>Nome: {{$aluno->nome}}</p>
        <p>Matricula: {{$aluno->matricula}}</p>
        @forelse($aluno->telefones()->get() as $t)
            <p>Telefone: {{$t->numero}}</p>
        @empty
            <p>Não há telefones cadastrados</p>
        @endforelse
    </div>
@endsection