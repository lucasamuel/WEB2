<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Itens Entrada</title>
</head>
<body>
    <h1>Cadastrar Item Entrada</h1>
    <form action="{{route('itens_entrada.create')}}" method="post">
        @csrf
        <label for="">Quantidade: </label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="">ID Entrada: </label>
        <input type="text" name="identrada" id="identrada">
        <input type="submit" value="Cadastrar">    
    </form>
</body>
</html>