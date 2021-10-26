<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iten_Venda extends Model
{
    use HasFactory;

    protected $table = "itens_venda"

    protected $filable = [
        'quantidade',
        'descricao'
    ];
}
