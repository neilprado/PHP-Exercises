@extends('basis')
@section('content')
    @forelse($alunos as $a)
        <div class="card mt-3">
            <div class="card-body">
                <a href="{{url("/listar/$a->id")}}">{{$a->nome}}</a>
            </div>
        </div>
    @empty
        <p class="card-text">Não há alunos cadastrados ainda</p>
    @endforelse
@endsection