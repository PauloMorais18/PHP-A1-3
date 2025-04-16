@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Novo Pedido</h1>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantidade_itens">Quantidade de Itens:</label>
            <input type="number" name="quantidade_itens" id="quantidade_itens" class="form-control" min="1" required>
        </div>

        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" name="total" id="total" class="form-control" step="0.01" min="0" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection