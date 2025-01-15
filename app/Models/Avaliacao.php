<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Requisicao;


class Avaliacao extends Model
{
    use HasFactory;

    // Defina o nome da tabela, caso não siga a convenção de nomes do Laravel
    protected $table = 'avaliacoes';

    // Defina os campos que podem ser preenchidos em massa (mass assignable)
    protected $fillable = [
        'requisicao_id',
        'evento_dia',
        'rate_evento',
        'rate_servico',
        'rate_cordialidade',
        'rate_geral',
        'elogios_sugestoes',
        'usuario_id',
        'nome_usuario',
    ];

    // Defina as relações do modelo
    public function requisicao()
    {
        return $this->belongsTo(Requisicao::class, 'requisicao_id');
    }
}
