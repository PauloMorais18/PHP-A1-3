<x-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Lista de Pedidos</h1>
            <a href="{{ route('orders.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Novo Pedido
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Data</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Descrição</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Itens</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ações</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($orders as $order)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $order->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $order->created_at->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 max-w-xs">
                            @if($order->description)
                                <span class="text-gray-700">{{ Str::limit($order->description, 50) }}</span>
                                @if(strlen($order->description) > 50)
                                    <span class="text-gray-400">[...]</span>
                                @endif
                            @else
                                <span class="text-gray-400 italic">Sem descrição</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $order->items_count }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">R$ {{ number_format($order->total, 2, ',', '.') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <a href="{{ route('orders.show', $order->id) }}" 
                                   class="text-blue-500 hover:text-blue-700">Ver</a>
                                <a href="{{ route('orders.edit', $order->id) }}" 
                                   class="text-green-500 hover:text-green-700">Editar</a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-500 hover:text-red-700"
                                            onclick="return confirm('Tem certeza que deseja excluir este pedido?')">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $orders->links() }}
        </div>
    </div>
</x-layout>