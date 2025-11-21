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

Route::prefix('items')->group(function () {
   Route::get('/', [ItemController::class, 'index'])->name('items.index');
   Route::get('/create', [ItemController::class, 'create'])->name('items.create');
   Route::post('/', [ItemController::class, 'store'])->name('items.store');
   Route::get('/{id}', [ItemController::class, 'show']);
});
