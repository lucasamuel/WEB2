<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produto"

    protected $filable = [
        'descricao',
        'categoria',
        'frete',
        'preco'
    ];

    function itens_venda(){
        return $this->hasMany(ItemVenda::class, 'idproduto', 'id');
    }

    function itens_entrada(){
        return $this->hasMany(ItemEntrada::class, 'idproduto', 'id');
    }
}
