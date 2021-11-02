<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Entradas</title>
</head>
<body>
    <h1>Cadastrar Entrada</h1>
    <form action="{{route('entrada.create')}}" method="post">
        @csrf
        <label for="">Valor Total: </label>
        <input type="text" name="valortotal" id="valortotal">
        <label for="">ID Fornecedor: </label>
        <input type="text" name="idfornecedor" id="idfornecedor">
        <label for="">Data da Entrada: </label>
        <input type="text" name="dataentrada" id="dataentrada">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>