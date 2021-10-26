<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function show(){
        $clientes = Entrada::all();
        echo ($entrada);
    }

    public function index(){
        $entrada = Entrada::all();
        return view('entradaindex.index', ['entrada' => $entrada ]);
    }

    public function create(){
        return view('entradacreate.create');
    }

    public function store(Request $request){
        $entrada = new Entrada();
        $entrada->quantidade = $request->quantidade;
        $entrada->save();
        return redirect('index');
    }
}
