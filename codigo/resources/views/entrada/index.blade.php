<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas</title>
</head>
<body>
    <h1>Entradas</h1>
    @foreach ($entrada)
    <ul> 
        <li>Valor Total: {{$entrada->valortotal}};</li>
        <li>ID Entrada: {{$entrada->identrada}};</li>
        <li>Data da Entrada: {{$entrada->dataentrada}};</li>
        <a href="{{route('entrada.edit', [$entrada->id])}}">Editar</a>
        <form action="{{route('entrada.destroy', [$entrada->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </ul>
    @endforeach
</body>
</html>