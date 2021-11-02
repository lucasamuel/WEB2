<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="{{route('produto.create')}}" method="post">
        @csrf
        <label for="">Descrição: </label>
        <input type="text" name="descricao" id="descricao">
        <label for="">Categoria: </label>
        <input type="text" name="categoria" id="categoria">
        <label for="">Frete: </label>
        <input type="text" name="frete" id="frete">
        <label for="">Preço: </label>
        <input type="text" name="preco" id="preco">
        <input type="submit" value="Cadastrar">    
    </form>
</html>