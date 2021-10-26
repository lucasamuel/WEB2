<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show(){
        $produto = Produto::all();
        echo ($produto);
    }

    public function index(){
        $produto = ItemVenda::all();
        return view('produtoindex.index', ['produto' => $produto ]);
    }

    public function create(){
        return view('produtocreate.create');
    }

    public function store(Request $request){
        $produto = new Produto();
        $produto->categoria = $request->categoria;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect('index');
    }
}
