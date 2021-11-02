<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Itens Venda</title>
</head>
<body>
    <h1>Cadastrar Item Venda</h1>
    <form action="{{route('itens_venda.create')}}" method="post">
        @csrf
        <label for="">ID Venda: </label>
        <input type="text" name="idvenda" id="idvenda">
        <label for="">Descrição: </label>
        <input type="text" name="descricao" id="descricao">
        <input type="submit" value="Cadastrar">    
    </form>
</body>
</html>