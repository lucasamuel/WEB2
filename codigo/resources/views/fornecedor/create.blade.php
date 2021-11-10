<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Fornecedores</title>
</head>
<body>
    <h1>Cadastrar Fornecedore</h1>
    <form action="{{route('fornecedor.create')}}" method="post">
        @csrf
        <label for="">Decrição: </label>
        <input type="text" name="descricao" id="descricao">
        <label for="">CNPJ: </label>
        <input type="text" name="cnpj" id="cnpj">
        <label for="">Endereço: </label>
        <input type="text" name="endereco" id="endereco">
        <input type="submit" value="Cadastrar">    
    </form>
</body>
</html>