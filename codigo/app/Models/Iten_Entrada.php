<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iten_Entrada extends Model
{
    use HasFactory;
    protected $table = "itens_entrada"

    protected $fillable = [
        'identrada',
        'quantidade'
    ];
    
    public function entrada(){
        return $this->belongsTo(Entrada::class, 'identrada','id');
    }

    public function produto(){
        return $this->belongsTo(Produto::class, 'produto_id','id');
    }
}
