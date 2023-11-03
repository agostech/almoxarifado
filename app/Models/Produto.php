<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'estoque',
        'tamanho',
        'data_registro',
        'tipo_produto_id',
        'user_id',
        'status'
    ];

    public function tipo(){
        return $this->belongsTo(TipoProduto::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
