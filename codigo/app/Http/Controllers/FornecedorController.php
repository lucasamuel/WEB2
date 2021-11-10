<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function show() {
        $fornecedor = Fornecedor::all();
        echo $fornecedor;
    }

    public function index() {
        $fornecedor = Fornecedor::all();
        return view('fornecedor.index', ['fornecedor'=>$fornecedor]);
    }

    public function create() {
        return view('fornecedor.create'); 
    }

    public function store(Request $request) {
        $fornecedor = new Fornecedor();
        $fornecedor-> descricao = $request->decricao;
        $fornecedor->endereco= $request->endereco;
        $fornecedor->cnpj= $request->cnpj;
        $fornecedor->save();
        return redirect('/fornecedor/index');
    }
    public function edit($id) {
        $fornecedor = Fornecedor::findorFail($id);
        return view('fornecedor.edit', ['fornecedor'=>$fornecedor]);
    }

    public function update(Request $request) {
        Fornecedor::find($request->id)->update($request->except('_method'));
        return redirect('fornecedor/index')->with('msg', 'Fornecedor Editado');
    }
    
    public function destroy($id) {
        Fornecedor::findorFail($id)->delete();
        return redirect('fornecedor/index')->with('msg', 'Fornecedor Excluído');
    }
}
