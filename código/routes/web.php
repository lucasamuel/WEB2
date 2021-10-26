<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProdutoController;


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

