<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller {

    public function show(){
        $clientes = Cliente::all();
        return view('clientes.show', ['clientes'=>$clientes]);
    }

    public function index() {
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function create() {
        return view('clientes.create');
    }

    public function store(Request $request) {
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->debito = $request->debito;
        $cliente->save();
        return redirect('/clientes/index')-with('msg', 'Cliente cadastrado');
    }


    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit', ['clientes'=>$clientes]);
    }

    public function update(Request $request) {
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect('clientes/')->with('msg', 'Cliente Editado');
    }

    public function destroy(Request $request) {
        Cliente::findOrFail($request->id)->delete();
        return redirect('clientes/')->with('msg', 'Cliente Excluído');
    }
}