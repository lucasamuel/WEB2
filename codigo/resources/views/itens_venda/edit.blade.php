<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Item Venda</title>
</head>
<body>
    <form action="{{route('itens_venda.update', ['id' => $itens_venda->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">ID Venda: </label>
        <input type="text" name="idvenda" id="idvenda" value="{{$itens_venda->idvenda}}">
        <label for="">Decrição: </label>
        <input type="text" name="descricao" id="descricao" value="{{$itens_venda->descricao}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>