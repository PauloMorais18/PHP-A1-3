@extends('layouts.app')

@section('content')
    <h1>Editar Aluno</h1>

    <form action="{{ route('alunos.update', $aluno) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $aluno->nome }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" value="{{ $aluno->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
