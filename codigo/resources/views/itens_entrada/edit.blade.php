<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Itens Entrada</title>
</head>
<body>
    <form action="{{route('itens_entrada.update', ['id' => $itens_entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Quantidade: </label>
        <input type="text" name="quantidade" id="quantidade" value="{{$itens_entrada->quantidade}}">
        <label for="">ID Entrada</label>
        <input type="text" name="identrada" id="identrada" value="{{$itens_entrada->identrada}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>