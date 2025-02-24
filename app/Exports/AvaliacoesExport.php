<?php

namespace App\Exports;

use App\Models\Avaliacao;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AvaliacoesExport implements FromCollection, WithHeadings
{
    /**
     * Retorna a coleção de dados.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Avaliacao::with('requisicao')->get()->map(function ($avaliacao) {
            return [
                'ID' => $avaliacao->id,
                'Numano' => $avaliacao->requisicao->numano, // Acessa o campo 'numano' da requisição
                'Evento Dia' => $avaliacao->evento_dia,
                'Rate Evento' => $avaliacao->rate_evento,
                'Rate Serviço' => $avaliacao->rate_servico,
                'Rate Cordialidade' => $avaliacao->rate_cordialidade,
                'Rate Geral' => $avaliacao->rate_geral,
                'Elogios' => $avaliacao->elogios,
                'Melhorias' => $avaliacao->melhorias,
                'Usuário ID' => $avaliacao->usuario_id,
                'Nome Usuário' => $avaliacao->nome_usuario,
            ];
        });
    }

    /**
     * Retorna os cabeçalhos das colunas.
     */
    public function headings(): array
    {
        return [
            'ID',
            'Numano',
            'Evento Dia',
            'Rate Evento',
            'Rate Serviço',
            'Rate Cordialidade',
            'Rate Geral',
            'Elogios',
            'Melhorias',
            'Usuário ID',
            'Nome Usuário',
        ];
    }
}
