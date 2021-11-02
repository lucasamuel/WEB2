<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    @foreach ($clientes as $cliente)

    <ul> 
        <li>Nome: {{$cliente->nome}};</li>
        <li>Endereço: {{$cliente->endereco}};</li>
        <li>Debito: {{$cliente->debito}};</li>
        <a href="{{route('cliente.edit', [$cliente->id])}}">Editar</a>
        <form action="{{route('cliente.destroy', [$cliente->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </ul>
    @endforeach
</body>
</html>