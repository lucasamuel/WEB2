<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ItenVendaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItenEntradaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Métodos Show
Route::get('/clientes', [ClienteController::class, 'show']);
Route::get('/fornecedor', [FornecedorController::class, 'show']);
Route::get('/vendas', [VendaController::class, 'show']);
Route::get('/produtos', [ProdutoController::class, 'show']);
Route::get('/entrada', [EntradaController::class, 'show']);
Route::get('/clientes', [CLienteController::class, 'show']);
Route::get('/itens_venda', [ItenVendaController::class, 'show']);
Route::get('/itens_entrada', [ItenEntradaController::class, 'show']);

// Rotas de Cliente
Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create',[ClienteController::Class, 'create'])->name('clientes.create');
Route::get('/clientes/edit',[ClienteController::Class, 'edit'])->name('clientes.edit');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/update/{id}',[ClienteController::Class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.delete');

// Rotas de Fornecedor
Route::get('/fornecedor/index', [FornecedorController::class, 'index'])->name('fornecedor.index');
Route::get('/fornecedor/create',[FornecedorController::Class, 'create'])->name('fornecedor.create');
Route::get('/fornecedor/edit',[FornecedorController::Class, 'edit'])->name('fornecedor.edit');
Route::post('/forncedor/store', [FornecedorController::class, 'store'])->name('fornecedor.store');
Route::get('/fornecedor/update/{id}',[FornecedorController::Class, 'update'])->name('fornecedor.update');
Route::delete('/forncedor/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.delete');

// Rotas de Produto
Route::get('/produto/index', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/create',[ProdutoController::Class, 'create'])->name('produto.create');
Route::get('/produto/edit',[ProdutoController::Class, 'edit'])->name('produto.edit');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('/produto/update/{id}',[ProdutoController::Class, 'update'])->name('produto.update');
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');

// Rotas de Venda
Route::get('/vendas/index', [VendaController::class, 'index'])->name('vendas.index');
Route::get('/vendas/create',[VendaController::Class, 'create'])->name('vendas.create');
Route::get('/vendas/edit',[VendaController::Class, 'edit'])->name('vendas.edit');
Route::get('/vendas/update/{id}',[VendaController::Class, 'update'])->name('vendas.update');
Route::delete('/vendas/{id}', [VendaController::class, 'destroy'])->name('vendas.delete');

// Rotas de Item Venda
Route::get('/itens_venda/index', [ItenVendaController::class, 'index'])->name('itens_venda.index');
Route::get('/itens_venda/create',[ItenVendaController::Class, 'create'])->name('itens_venda.create');
Route::get('/itens_venda/edit',[ItenVendaController::Class, 'edit'])->name('itens_venda.edit');
Route::get('/itens_venda/update/{id}',[ItenVendaController::Class, 'update'])->name('itens_venda.update');
Route::delete('/itens_venda/{id}', [ItenVendaController::class, 'destroy'])->name('itens_venda.delete');

// Rotas de Entrada
Route::get('/entrada/index', [EntradaController::class, 'index'])->name('entrada.index');
Route::get('/entrada/create',[EntradaController::Class, 'create'])->name('entrada.create');
Route::get('/entrada/edit',[EntradaController::Class, 'edit'])->name('entrada.edit');
Route::get('/entrada/update/{id}',[EntradaController::Class, 'update'])->name('entrada.update');
Route::delete('/entrada/{id}', [EntradaController::class, 'destroy'])->name('entrada.delete');

// Rotas de Item Entrada
Route::get('/itens_entrada/index', [ItenEntradaController::class, 'index'])->name('itens_entrada.index');
Route::get('/itens_entrada/create',[ItenEntradaController::Class, 'create'])->name('itens_entrada.create');
Route::get('/itens_entrada/edit',[ItenEntradaController::Class, 'edit'])->name('itens_entrada.edit');
Route::get('/itens_entrada/update/{id}',[ItenEntradaController::Class, 'update'])->name('itens_entrada.update');
Route::delete('/itens_entrada/{id}', [ItenEntradaController::class, 'destroy'])->name('itens_entrada.delete');

// Rotas de Endereço
Route::get('/endereco/index', [EnderecoController::class, 'index'])->name('endereco.index');
Route::get('/endereco/create',[EnderecoController::Class, 'create'])->name('endereco.create');
Route::get('/endereco/edit',[EnderecoController::Class, 'edit'])->name('endereco.edit');
Route::get('/endereco/update/{id}',[EnderecoController::Class, 'update'])->name('endereco.update');
Route::delete('/endereco/{id}', [EnderecoController::class, 'destroy'])->name('endereco.delete');






