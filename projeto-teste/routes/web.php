<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::redirect('/', '/pedidos');

// Rotas de Pedidos
Route::resource('pedidos', PedidoController::class);

// Remova ou comente esta linha:
// Auth::routes();