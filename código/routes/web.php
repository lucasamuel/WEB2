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

Route::get('/clientes', [CLienteController:: class, 'show']
Route::get('/fornecedor', [FornecedorController:: class, 'show']
Route::get('/vendas', [VendaController:: class, 'show']
Route::get('/produtos', [ProdutoController:: class, 'show']
Route::get('/entrada', [EntradaController:: class, 'show']
Route::get('/clientes', [CLienteController:: class, 'show']
Route::get('/itens_venda', [ItenVendaController:: class, 'show']
Route::get('/itens_entrada', [ItenEntradaController:: class, 'show']




Route::get('/index', [ClienteController::class, 'index']);
Route::get('/create',[ClienteController::class, 'create']);
Route::post('/store',[ClienteController::class, 'store']);

Route::get('/fornecedorindex', [FornecedorController::class, 'index']);
Route::get('/fornecedorcreate',[FornecedorController::class, 'create']);
Route::post('/fornecedorstore',[FornecedorController::class, 'store']);

Route::get('/produtosindex', [ProdutoController::class, 'index']);
Route::get('/produtoscreate',[ProdutoController::class, 'create']);
Route::post('/produtosstore',[ProdutoController::class, 'store']);

Route::get('/vendaindex', [VendaController::class, 'index']);
Route::get('/vendacreate',[VendaController::class, 'create']);
Route::post('/vendastore',[VendaController::class, 'store']);

Route::get('/itemVendaindex', [ItemVendaController::class, 'index']);
Route::get('/itemVendacreate',[ItemVendaController::class, 'create']);
Route::post('/itemVendastore',[ItemVendaController::class, 'store']);

Route::get('/entradaindex', [EntradaController::class, 'index']);
Route::get('/entradacreate',[EntradaController::class, 'create']);
Route::post('/entradastore',[EntradaController::class, 'store']);

Route::get('/itemEntradaindex', [ItemEntradaController::class, 'index']);
Route::get('/itemEntradacreate',[ItemEntradaController::class, 'create']);
Route::post('/itemEntradastore',[ItemEntradaController::class, 'store']);








