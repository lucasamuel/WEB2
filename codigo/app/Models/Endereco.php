<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'enderecos';

    protected $fillable = [
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'idcliente'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'idcliente','id');
    }
}
