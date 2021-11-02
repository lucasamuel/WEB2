<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Endereços</title>
</head>
<body>
    <h1>Cadastrar Endereços</h1>
    <form action="{{route('endereco.store')}}" method="post">
        @csrf
        <label for="">Logradouro: </label>
        <input type="text" name="logradouro" id="logradouro">
        <label for="">Número: </label>
        <input type="text" name="numero" id="numero">
        <label for="">Bairro: </label>
        <input type="text" name="bairro" id="bairro">
        <label for="">Cidade: </label>
        <input type="text" name="cidade" id="cidade">
        <label for="">Uf:</label>
        <input type="text" name="uf" id="uf">
        <label for="">ID Cliente: </label>
        <input type="text" name="cliente_id" id="cliente_id">
        
        <p><input type="submit" value="Cadastrar">    
    </form>
</body>
</html>