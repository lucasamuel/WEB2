<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iten_Venda extends Model
{
    use HasFactory;

    protected $table = "itens_venda"

    protected $filable = [
        'idvenda',
        'descricao'
    ];

    public function venda(){
        return $this->belongsTo(Venda::class, 'idvenda','id');
    }

    public function produto(){
        return $this->belongsTo(Produto::class, 'idproduto','id');
    }
}
