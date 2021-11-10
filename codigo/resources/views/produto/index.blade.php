<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
<h1>Produto</h1>
    @foreach ($produto)

    <ul> 
        <li>Descrição: {{$produto->descricao}};</li>
        <li>Categoria: {{$produto->categoria}};</li>
        <li>Frete: {{$produto->frete}};</li>
        <li>Preço: {{$produto->preco}};</li>
        <a href="{{route('produto.edit', [$produto->id])}}">Editar</a>
        <form action="{{route('produto.destroy', [$produto->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </ul>
    @endforeach
</body>
</html>