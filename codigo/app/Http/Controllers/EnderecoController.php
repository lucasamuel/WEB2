<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    // Função Mostrar Endereços
    public function show(){
        $enderecos = Endereco::all();
        echo $enderecos;
    }

    // Página de Endereços
    public function index(){
        $enderecos = Endereco::all();
        return view('endereco.index', ['enderecos'=>$enderecos]);
    }

    // Função Adicionar Endereço
    public function create(){
        return view('endereco.create'); 
    }

    // Função para armazenar Endereço
    public function store(Request $request)
    {
        $endereco = new Endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->numero=$request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->idcliente = $request->idcliente;
        $endereco->save();
        return redirect('/endereco/index');
    }

    public function edit($id){
        $endereco = Endereco::findorFail($id);
        return view('endereco.edit', ['endereco'=>$endereco]);
    }

    public function update(Request $request){
        Endereco::find($request->id)->update($request->except('_method'));
        return redirect('endereco/index')->with('msg', 'Endereço Editado');
    }
    
    public function destroy($id){
        Endereco::findorFail($id)->delete();
        return redirect('endereco/index')->with('msg', 'Endereço Excluído');
    }
}
