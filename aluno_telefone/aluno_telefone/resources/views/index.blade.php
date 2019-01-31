@extends('basis')

@section('content')
    <h2>Inserir novo aluno</h2>
    {!!Form::open(['action' => 'AlunoController@add', 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('nome', 'Nome')}}
        {{Form::text('nome', '', ['class' =>'form-control', 'placeholder' => 'Nome do Aluno'])}}
        {{Form::label('matricula', 'Matricula')}}
        {{Form::text('matricula', '', ['class' =>'form-control', 'placeholder' => 'Matricula do Aluno'])}}
        {{Form::label('telefone', 'Telefone')}}
        {{Form::text('numero', '', ['class' =>'form-control', 'placeholder' => 'Fone'])}}
      </div>
      {{Form::submit('Adicionar', ['class' => 'btn btn-primary'])}}
    {!!Form::close()!!}
@endsection