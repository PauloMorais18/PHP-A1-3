@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pedido #{{ $pedido->id }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Data:</strong> {{ $pedido->data->format('d/m/Y') }}</p>
            <p><strong>Quantidade de Itens:</strong> {{ $pedido->quantidade_itens }}</p>
            <p><strong>Total:</strong> R$ {{ number_format($pedido->total, 2, ',', '.') }}</p>
            <p><strong>Criado em:</strong> {{ $pedido->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Atualizado em:</strong> {{ $pedido->updated_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection