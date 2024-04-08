<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Admin\BrandsController;
use App\Http\Controllers\Web\Admin\CategoriesController;
use App\Http\Controllers\Web\Admin\ClientsController;
use App\Http\Controllers\Web\Admin\ProductsController;
use App\Http\Controllers\Web\Admin\DashboardController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;

//HOME PAGE
Route::get('/', [PageController::class, 'home'])->name('home');

//PAINEL
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //PRODUTOS CRUD
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/products/create', [ProductsController::class, 'create'])->name('productCreate');
    Route::post('/products/store', [ProductsController::class, 'store'])->name('product.store');
    Route::get('/products/edit/{id}', [ProductsController::class, 'edit'])->name('productEdit');
    Route::put('/products/update', [ProductsController::class, 'update'])->name('product.update');


    //CLIENTES CRUD
    Route::get('/clientes', [ClientsController::class, 'index'])->name('clientes');

    //CATEGORIAS CRUD
    Route::get('/categorias', [CategoriesController::class, 'index'])->name('categories');

    //MARCAS CRUD
    Route::get('/marcas', [BrandsController::class, 'index'])->name('brands');
});


//PERFIL
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
