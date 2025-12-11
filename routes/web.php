<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{TypeItemController, ItemController, HomeController, IndexController};

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('type-items')->name('type-items.')->group(function () {
    Route::get('/', [TypeItemController::class, 'index'])->name('index');
    Route::get('/create', [TypeItemController::class, 'create'])->name('create');
    Route::post('/', [TypeItemController::class, 'store'])->name('store');
    Route::get('/{id}', [TypeItemController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [TypeItemController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [TypeItemController::class, 'update'])->name('update');
    Route::delete('/{id}', [TypeItemController::class, 'destroy'])->name('destroy');
});

Route::prefix('items')->name('items.')->group(function () {
   Route::get('/', [ItemController::class, 'index'])->name('index');
   Route::get('/create', [ItemController::class, 'create'])->name('create');
   Route::post('/', [ItemController::class, 'store'])->name('store');
   Route::get('/{id}', [ItemController::class, 'show'])->name('show');
   Route::get('/{id}/edit', [ItemController::class, 'edit'])->name('edit');
   Route::patch('/{id}', [ItemController::class, 'update'])->name('update');
   Route::delete('/{id}', [ItemController::class, 'destroy'])->name('destroy');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index', [IndexController::class, 'index'])->name('index');
