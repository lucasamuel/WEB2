<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItenVendaController extends Controller
{
    public function show(){
        $itens_venda = ItemVenda::all();
        echo ($itens_venda);
    }

    public function index(){
        $itens_venda = ItemVenda::all();
        return view('itemvendaindex.index', ['itens_venda' => $itens_venda ]);
    }

    public function create(){
        return view('itemvendacreate.create');
    }

    public function store(Request $request){
        $itens_venda = new ItemVenda();
        $itens_venda->quantidade = $request->quantidade;
        $itens_venda->descricao = $request->descricao;
        $itens_venda->save();
        return redirect('index');
    }
}
