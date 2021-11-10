<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>
<body>
<h1>Fornecedores</h1>
    @foreach ($fornecedor)
    <ul> 
        <li>Descrição: {{$fornecedor->nome}};</li>
        <li>CNPJ: {{$fornecedor->cnpj}};</li>
        <li>Endereço: {{$fornecedor->endereco}};</li>
        <a href="{{route('fornecedor.edit', [$fornecedor->id])}}">Editar</a>
        <form action="{{route('fornecedor.destroy', [$fornecedor->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </ul>
    @endforeach
</body>
</html>