@extends('layouts.app')

@section('content')
    <h1>Lista de Alunos</h1>
    <a href="{{ route('alunos.create') }}" class="btn btn-primary mb-3">Novo Aluno</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>
                        <a href="{{ route('alunos.edit', $aluno) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('alunos.destroy', $aluno) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
