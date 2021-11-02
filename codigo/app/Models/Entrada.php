<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $table = "entrada"

    protected $filable = [
        'valortotal',
        'idfornecedor',
        'dataentrada'
    ];

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'idfornecedor','id');
    }

    function itens_entrada(){
        return $this->hasMany(ItenEntrada::class, 'identrada', 'id');
    }
}
