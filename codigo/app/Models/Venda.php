<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = "vendas"

    protected $filable = [
        'idcliente',
        'valortotal',
        'datavenda'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'idcliente','id');
    }

    function itens_venda(){
        return $this->hasMany(ItenVenda::class, 'iditensvenda', 'id');
    }
}
