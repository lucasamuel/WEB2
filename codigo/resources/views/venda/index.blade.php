<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
</head>
<body>
    <h1>Vendas</h1>
    @foreach ($vendas)

    <ul> 
        <li>ID Cliente: {{$vendas->idcliente}};</li>
        <li>Valor Total: {{$vendas->valortotal}};</li>
        <li>Data Venda: {{$vendas->datavenda}};</li>
        <a href="{{route('vendas.edit', [$vendas->id])}}">Editar</a>
        <form action="{{route('vendas.destroy', [$vendas->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </ul>
    @endforeach
</body>
</html>