@extends('layouts.main')

@section('titulo', 'Editar Cliente')

@section('conteudo')
<h3>Editar Cliente</h3>
    <form action="{{route('clientes.edit', ['id' => $clientes->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome Clientes</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
        <label for="">Débito</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
        <label for="">Endereco</label>
        <input type="text" name="endereco" id="endereco" value="{{$cliente->endereco}}">
        <input type="submit" value="Alterar">
    </form>
@section('conteudo')