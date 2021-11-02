<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Clientes</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form action="{{route('clientes.create')}}" method="post">
        @csrf
        <label for="">Nome: </label>
        <input type="text" name="nome" id="nome">
        <label for="">Debito: </label>
        <input type="text" name="debito" id="debito">
        <label for="">Endereço: </label>
        <input type="text" name="endereco" id="endereco">
        <input type="submit" value="Cadastrar">    
    </form>
</body>
</html>