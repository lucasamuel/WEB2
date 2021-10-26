<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItenEntradaController extends Controller
{
    public function show(){
        $itens_entrada = ItemEntrada::all();
        echo ($itens_entrada);
    }

    public function index(){
        $itenEntrada = ItenEntrada::all();
        return view('itementradaindex.index', ['itens_entrada' => $itens_entrada ]);
    }

    public function create(){
        return view('itementradacreate.create');
    }

    public function store(Request $request){
        $itens_entrada = new ItemEntrada();
        $itens_entrada->quantidade = $request->quantidade;
        $itens_entrada->save();
        return redirect('index');
    }
}
