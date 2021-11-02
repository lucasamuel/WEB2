<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereços</title>
</head>
<body>
    <h1>Endereços</h1>
    @foreach ($enderecos as $endereco)
    <ul> 
        <li>Logradouro: {{$endereco->nome}};</li>
        <li>Número: {{$endereco->numero}};</li>
        <li>Bairro: {{$endereco->bairro}};</li>
        <li>Cidade: {{$endereco->cidade}};</li>
        <li>UF: {{$endereco->uf}};</li>
        <li>ID Cliente: {{$endereco->idcliente}};</li>
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