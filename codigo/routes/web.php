<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ItemVendaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItemEntradaController;


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
Route::get('/clientes', [ClienteController::class, 'show'])->name('clienteshow');
Route::get('/fornecedor', [FornecedorController::class, 'show'])->name('fornecedorshow');
Route::get('/vendas', [VendaController::class, 'show'])->name('vendashow');
Route::get('/produtos', [ProdutoController::class, 'show'])->name('produtoshow');
Route::get('/entrada', [EntradaController::class, 'show'])->name('entradashow');
Route::get('/itensvenda', [ItemVendaController::class, 'show'])->name('itensvendashow');
Route::get('/itensentrada', [ItemEntradaController::class, 'show'])->name('itensentradashow');

// Rotas de Cliente
Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create',[ClienteController::Class, 'create'])->name('clientes.create');
Route::get('/clientes/edit/{id}',[ClienteController::Class, 'edit'])->name('clientes.edit');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::put('/clientes/update/{id}',[ClienteController::Class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.delete');

// Rotas de Fornecedor
Route::get('/fornecedor/index', [FornecedorController::class, 'index'])->name('fornecedor.index');
Route::get('/fornecedor/create',[FornecedorController::Class, 'create'])->name('fornecedor.create');
Route::get('/fornecedor/edit',[FornecedorController::Class, 'edit'])->name('fornecedor.edit');
Route::post('/forncedor/store', [FornecedorController::class, 'store'])->name('fornecedor.store');
Route::put('/fornecedor/update/{id}',[FornecedorController::Class, 'update'])->name('fornecedor.update');
Route::delete('/forncedor/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.delete');

// Rotas de Produto
Route::get('/produto/index', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/create',[ProdutoController::Class, 'create'])->name('produto.create');
Route::get('/produto/edit',[ProdutoController::Class, 'edit'])->name('produto.edit');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produto.store');
Route::put('/produto/update/{id}',[ProdutoController::Class, 'update'])->name('produto.update');
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');

// Rotas de Venda
Route::get('/vendas/index', [VendaController::class, 'index'])->name('vendas.index');
Route::get('/vendas/create',[VendaController::Class, 'create'])->name('vendas.create');
Route::get('/vendas/edit',[VendaController::Class, 'edit'])->name('vendas.edit');
Route::put('/vendas/update/{id}',[VendaController::Class, 'update'])->name('vendas.update');
Route::delete('/vendas/{id}', [VendaController::class, 'destroy'])->name('vendas.delete');
Route::post('/vendas/store', [VendaController::class, 'store'])->name('vendas.store');

// Rotas de Item Venda
Route::get('/itens_venda/index', [ItemVendaController::class, 'index'])->name('itens_venda.index');
Route::get('/itens_venda/create',[ItemVendaController::Class, 'create'])->name('itens_venda.create');
Route::get('/itens_venda/edit',[ItemVendaController::Class, 'edit'])->name('itens_venda.edit');
Route::put('/itens_venda/update/{id}',[ItemVendaController::Class, 'update'])->name('itens_venda.update');
Route::delete('/itens_venda/{id}', [ItemVendaController::class, 'destroy'])->name('itens_venda.delete');
Route::post('/itens_venda/store', [ItemVendaController::class, 'store'])->name('itens_venda.store');

// Rotas de Entrada
Route::get('/entrada/index', [EntradaController::class, 'index'])->name('entrada.index');
Route::get('/entrada/create',[EntradaController::Class, 'create'])->name('entrada.create');
Route::get('/entrada/edit',[EntradaController::Class, 'edit'])->name('entrada.edit');
Route::put('/entrada/update/{id}',[EntradaController::Class, 'update'])->name('entrada.update');
Route::delete('/entrada/{id}', [EntradaController::class, 'destroy'])->name('entrada.delete');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entrada.store');

// Rotas de Item Entrada
Route::get('/itens_entrada/index', [ItemEntradaController::class, 'index'])->name('itens_entrada.index');
Route::get('/itens_entrada/create',[ItemEntradaController::Class, 'create'])->name('itens_entrada.create');
Route::get('/itens_entrada/edit',[ItemEntradaController::Class, 'edit'])->name('itens_entrada.edit');
Route::put('/itens_entrada/update/{id}',[ItemEntradaController::Class, 'update'])->name('itens_entrada.update');
Route::delete('/itens_entrada/{id}', [ItemEntradaController::class, 'destroy'])->name('itens_entrada.delete');
Route::post('/itens_entrada/store', [ItemEntradaController::class, 'store'])->name('itens_entrada.store');

// Rotas de Endereço
Route::get('/endereco/index', [EnderecoController::class, 'index'])->name('endereco.index');
Route::get('/endereco/create',[EnderecoController::Class, 'create'])->name('endereco.create');
Route::get('/endereco/edit',[EnderecoController::Class, 'edit'])->name('endereco.edit');
Route::put('/endereco/update/{id}',[EnderecoController::Class, 'update'])->name('endereco.update');
Route::delete('/endereco/{id}', [EnderecoController::class, 'destroy'])->name('endereco.delete');






