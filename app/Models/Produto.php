<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = [
        'tributacao_id',
        'fornecedor_id',
        'descricao',
        'preco'
    ];
    public function tributacao_id()
    {
        return $this->belongsTo(Tributacao::class, '', '');
    }
    public function fornecedor_id()
    {
        return $this->belongsTo(Fornecedor::class, '', '');
    }
}
