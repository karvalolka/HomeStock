<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeItemController;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('type-items')->group(function () {
    Route::get('/type-items', [TypeItemController::class, 'index']);
});

Route::prefix('items')->name('items.')->group(function () {
   Route::get('/', [ItemController::class, 'index'])->name('index');
   Route::get('/create', [ItemController::class, 'create'])->name('create');
   Route::post('/', [ItemController::class, 'store'])->name('store');
   Route::get('/{id}', [ItemController::class, 'show'])->name('show');
   Route::get('/{id}/edit', [ItemController::class, 'edit'])->name('edit');
   Route::put('/{id}', [ItemController::class, 'update'])->name('update');
   Route::delete('/{id}', [ItemController::class, 'destroy'])->name('destroy');
});
