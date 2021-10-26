<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function show(){
        $venda = Venda::all();
        echo ($venda);
    }

    public function index(){
        $venda = Venda::all();
        return view('vendaindex.index', ['venda' => $venda ]);
    }

    public function create(){
        return view('vendacreate.create');
    }

    public function store(Request $request){
        $venda = new ItemEntrada();
        $venda->valortotal = $request->valortotal;
        $venda->save();
        return redirect('index');
    }
}
