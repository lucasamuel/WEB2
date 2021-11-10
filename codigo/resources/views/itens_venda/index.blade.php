<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>Itens Venda</h1>
    @foreach ($itens_venda)

    <ul> 
        <li>ID Venda: {{$itens_venda->idvenda}};</li>
        <li>Descrição: {{$itens_venda->descricao}};</li>
        <a href="{{route('itens_venda.edit', [$itens_venda->id])}}">Editar</a>
        <form action="{{route('itens_venda.destroy', [$itens_venda->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </ul>
    @endforeach
</body>
</html>