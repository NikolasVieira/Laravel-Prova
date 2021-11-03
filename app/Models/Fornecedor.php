<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = 'fornecedores';
    protected $fillable = [
        'nome',
        'estado',
        'endereco'
    ];
    public function id()
    {
        return $this->hasMany(Produto::class, 'id', 'fornecedor_id');
    }
}
