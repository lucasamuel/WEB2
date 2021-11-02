<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Vendas</title>
</head>
<body>
    <h1>Cadastrar Vendas</h1>
    <form action="{{route('vendas.create')}}" method="post">
    @csrf
        <label for="">ID Cliente: </label>
        <input type="text" name="idcliente" id="idcliente">
        <label for="">Valor Total: </label>
        <input type="text" name="valortotal" id="valortotal">
        <label for="">Data Venda: </label>
        <input type="text" name="datavenda" id="datavenda">
        <input type="submit" value="Cadastrar">    
    </form>
</body>
</html>