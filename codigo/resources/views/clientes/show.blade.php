@extends('layouts.main')

@section('titulo', 'Mostrar clientes')

@section('conteudo')
<div class="styleshow">
    @foreach ($clientes as $cliente)
    <div style="margin: 10px">
        <td>Nome <?php echo $cliente->nome; ?> </td></br>
        <td>Débito <?php echo $cliente->debito; ?> </td></br>
        <td>Endereço <?php echo $cliente->endereco; ?> </td></br>
    </div>
    @endforeach
</div>
@endsection('conteudo')