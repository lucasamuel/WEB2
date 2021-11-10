<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = "fornecedor";

    protected $filable = [
        'descricao', 
        'endereco',
        'cnpj' 
    ];

    function endereco(){
        return $this->hasMany(Endereco::class, 'idfornecedor', 'id');

    }

    public function entrada(){
        return $this->belongsTo(Entrada::class, 'idfornecedor','id');
    }
}
