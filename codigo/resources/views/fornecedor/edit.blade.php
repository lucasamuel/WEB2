<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Fornecedores</title>
</head>
<body>
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Decricao: </label>
        <input type="text" name="descricao" id="descricao" value="{{$fornecedor->descricao}}">
        <label for="">CNPJ: </label>
        <input type="text" name="cnpj" id="cnpj" value="{{$fornecedor->cnpj}}">
        <label for="">Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">    
        <input type="submit" value="Alterar">
    </form>
</body>
</html>