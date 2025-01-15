<?php

namespace App\Http\Requests\Avaliacao;

use Illuminate\Foundation\Http\FormRequest;

class AvaliacaoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'rate-evento' => 'required|integer|min:1|max:5',
            'rate-servico' => 'required|integer|min:1|max:5',
            'rate-cordialidade' => 'required|integer|min:1|max:5',
            'rate-geral' => 'required|integer|min:1|max:5',
            'elogios' => 'required',
            'melhorias' => 'required'
        ];
    }

    /**
     * Mensagens de erro personalizadas.
     *
     * @return array
     */
    public function messages()
    {
        return [            
            'rate-evento.required' => 'O campo "Satisfação geral" é obrigatório.',
            'rate-evento.integer' => 'O campo "Satisfação geral" deve ser um valor entre 1 e 5.',
            'rate-evento.min' => 'O campo "Satisfação geral" deve ser no mínimo 1.',
            'rate-evento.max' => 'O campo "Satisfação geral" deve ser no máximo 5.',
            
            'rate-servico.required' => 'O campo "Pontualidade" é obrigatório.',
            'rate-servico.integer' => 'O campo "Pontualidade" deve ser um valor entre 1 e 5.',
            'rate-servico.min' => 'O campo "Pontualidade" deve ser no mínimo 1.',
            'rate-servico.max' => 'O campo "Pontualidade" deve ser no máximo 5.',
            
            'rate-cordialidade.required' => 'O campo "Cordialidade" é obrigatório.',
            'rate-cordialidade.integer' => 'O campo "Cordialidade" deve ser um valor entre 1 e 5.',
            'rate-cordialidade.min' => 'O campo "Cordialidade" deve ser no mínimo 1.',
            'rate-cordialidade.max' => 'O campo "Cordialidade" deve ser no máximo 5.',
            
            'rate-geral.required' => 'O campo "Avaliação geral" é obrigatório.',
            'rate-geral.integer' => 'O campo "Avaliação geral" deve ser um valor entre 1 e 5.',
            'rate-geral.min' => 'O campo "Avaliação geral" deve ser no mínimo 1.',
            'rate-geral.max' => 'O campo "Avaliação geral" deve ser no máximo 5.',

            'elogios.required' => 'O campo "Descreva elogios" é obrigatório',

            'melhorias.required' => 'O campo "Aponte melhorias" é obrigatório'

        ];
    }
}
