<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImovelController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    // Apenas admins podem acessar as rotas de criação, edição e exclusão
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    });

    // Todos os usuários (logados) podem visualizar
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

    // ... Repita para Imóveis

    // Apenas admins podem acessar as rotas de criação, edição e exclusão
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/imovels/create', [ProductController::class, 'create'])->name('imovels.create');
        Route::post('/imovels', [ProductController::class, 'store'])->name('imovels.store');
        Route::get('/imovels/{product}/edit', [ProductController::class, 'edit'])->name('imovels.edit');
        Route::put('/imovels/{product}', [ProductController::class, 'update'])->name('imovels.update');
        Route::delete('/imovels/{product}', [ProductController::class, 'destroy'])->name('imovels.destroy');
    });

    // Todos os usuários (logados) podem visualizar
    Route::get('/imovels', [ProductController::class, 'index'])->name('imovels.index');
    Route::get('/imovels/{product}', [ProductController::class, 'show'])->name('imovels.show');

    // ... Repita para Imóveis
});


