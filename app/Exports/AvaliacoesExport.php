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
        return Avaliacao::all();
    }

    /**
     * Retorna os cabeçalhos das colunas.
     */
    public function headings(): array
    {
        return [
            'ID',
            'Requisição ID',
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
