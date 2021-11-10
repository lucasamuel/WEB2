@extends('layouts.main')

@section('titulo', 'Cadastrar Cliente')

@section('conteudo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div id="form">
    <form action="{{route('clientes.create')}}" method="post" class="row g-3">
        <div class="row">
            <h1>Cadastrar Cliente</h1>
                @csrf
                <div class="col"></div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Nome" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Nome: </label>
                    </div>
                </div>
                <div class="col"></div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Nome" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Débito: </label>
                    </div>
                </div>
                <div class="col"></div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Nome" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Endereço: </label>
                    </div>
                </div>
        </div>    
    </form>
</div>
@endsection('conteudo')