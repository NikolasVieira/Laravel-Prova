<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tributacao extends Model
{
    use HasFactory;
    protected $table = 'tributacoes';
    protected $fillable = [
        'tipo',
        'valor',
    ];
    public function id()
    {
        return $this->hasMany(Produto::class, 'id', 'tributacao_id');
    }
}
