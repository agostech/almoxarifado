<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'quantidade',
        'tipo',
        'quantidade',
        'data_registro',
        'produto_id',
        'funcionario_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function funcionario(){
        return $this->belongsTo(Funcionario::class);
    }

    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
