## Ajustes e correção da atividade IV-correção

1 - Corrija o arquivo de rotas nomeando as rotas exemplo:

* Route::get('/clientes/create',[ClienteController::Class, 'create'])->name('clientes.create');

* Route::get('/clientes/edit',[ClienteController::Class, 'edit'])->name('clientes.edit');

* Route::get('/clientes/update/{id}',[ClienteController::Class, 'update'])->name('clientes.update');

2 -  Nas Views modifique as Actions substituido:

### Exemplo sem parametro: 
             <form action="/clientes/create" method="post">
### Por:
              <form action="{{route('clientes.create')}}" method="post">

### Exemplo com parametro:
             <form action="/clientes/update/{{$cliente->id}}" method="post">
### Por:
             <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">

3 - Na pasta Model corrija as relações das models (venda, intensvenda,entrada, itensentrada, fornecedor, produto)conforme relação apresentada entre o model cliente e endereço
# em anexo exemplo(cliente.php e endereco.php)
