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
        <p><li>Nome: {{$cliente->nome}};</li></p>
        <p><li>Endereço: {{$cliente->endereco}};</li></p>
        <p><li>Debito: {{$cliente->debito}};</li></p>
        
        <a href="{{route('clientes.edit', [$clientes->id])}}">Editar</a>
        <form action="{{route('clientes.destroy', [$clientes->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </ul>
    @endforeach
</body>
</html>