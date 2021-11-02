<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Entradas</title>
</head>
<body>
    <h1>Edição de Entrada</h1>
    <form action="{{route('entrada.update', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Valor Total: </label>
        <input type="text" name="valortotal" id="valortotal" value="{{$entrada->valortotal}}">
        <label for="">ID Fornecedor</label>
        <input type="text" name="idfornecedor" id="idfornecedor" value="{{$entrada->idfornecedor}}">
        <label for="">Data da Entrada</label>
        <input type="text" name="dataentrada" id="dataentrada" value="{{$entrada->dataentrada}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>