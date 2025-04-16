<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::resource('alunos', AlunoController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
