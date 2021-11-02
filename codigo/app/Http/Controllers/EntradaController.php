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
        return view('entradaindex.index', ['entrada'=>$entrada]);
    }

    public function create(){
        return view('entrada.create');
    }

    public function store(Request $request){
        $entrada = new Entrada();
        $entrada->valortotal = $request->valortotal;
        $entrada->idfornecedor = $request->idfornecedor;
        $entrada->dataentrada = $request->dataentrada;
        $entrada->save();
        return redirect('/entrada/index');
    }

    public function edit($id){
        $entrada = Entrada::findorFail($id);
        return view('entrada.edit', ['entrada'=>$entrada]);
    }

    public function update(Request $request){
        Entrada::find($request->id)->update($request->except('_method'));
        return redirect('entrada/index')->with('msg', 'entrada atualizada');
    }
    
    public function destroy($id){
        Entrada::findorFail($id)->delete();
        return redirect('entrada/index')->with('msg', 'entrada excluída com sucesso');
    }
}
