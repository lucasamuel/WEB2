<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens Entrada</title>
</head>
<body>
<h1>Itens Entrada</h1>
    @foreach ($itens_entrada)

    <ul> 
        <li>Quantidade: {{$itens_entrada->quantidade}};</li>
        <li>ID Entrada: {{$itens_entrada->identrada}};</li>
        <a href="{{route('itens_entrada.edit', [$itens_entrada->id])}}">Editar</a>
        <form action="{{route('itens_entrada.destroy', [$itens_entrada->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </ul>
    @endforeach
</body>
</html>