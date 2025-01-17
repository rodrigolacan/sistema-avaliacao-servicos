<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Requisicao;


class Avaliacao extends Model
{
    use HasFactory;

    protected $table = 'avaliacoes';

    protected $fillable = [
        'requisicao_id',
        'evento_dia',
        'rate_evento',
        'rate_servico',
        'rate_cordialidade',
        'rate_geral',
        'elogios',
        'melhorias',
        'usuario_id',
        'nome_usuario',
    ];

    public function requisicao()
    {
        return $this->belongsTo(Requisicao::class, 'requisicao_id');
    }
}
