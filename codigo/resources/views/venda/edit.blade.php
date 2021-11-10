<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Venda</title>
</head>
<body>
    <form action="{{route('vendas.update', ['id' => $vendas->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">ID Cliente</label>
        <input type="text" name="idcliente" id="idcliente" value="{{$vendas->idcliente}}">
        <label for="">Valor Total</label>
        <input type="text" name="valortotal" id="valortotal" value="{{$vendas->valortotal}}">
        <label for="">Data Venda</label>
        <input type="text" name="datavenda" id="datavenda" value="{{$vendas->datavenda}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>