<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Produto</title>
</head>
<body>
    <form action="{{route('produto.update', ['id' => $produto->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Decrição</label>
        <input type="text" name="descricao" id="descricao" value="{{$produto->descricao}}">
        <label for="">Categoria: </label>
        <input type="text" name="categoria" id="categoria" value="{{$produto->categoria}}">
        <label for="">Frete: </label>
        <input type="text" name="frete" id="frete" value="{{$produto->frete}}">
        <label for="">Preço: </label>
        <input type="text" name="preco" id="preco" value="{{$produto->preco}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>