@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Pedido #{{ $pedido->id }}</h1>

    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" class="form-control" 
                   value="{{ $pedido->data->format('Y-m-d') }}" required>
        </div>

        <div class="form-group">
            <label for="quantidade_itens">Quantidade de Itens:</label>
            <input type="number" name="quantidade_itens" id="quantidade_itens" class="form-control" 
                   value="{{ $pedido->quantidade_itens }}" min="1" required>
        </div>

        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" name="total" id="total" class="form-control" 
                   value="{{ $pedido->total }}" step="0.01" min="0" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection