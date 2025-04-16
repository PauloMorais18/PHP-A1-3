@extends('layouts.app')

@section('content')
    <h1>Criar Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
