<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Controle de formulário do modelo especificado
 * @author Thiago Farias <thiago.amarante.farias@gmail.com>
 * @version 03/03/2018
 */
class MotosFormRequest extends FormRequest {

    /**
     * Determina se o usuário pode realizar o request
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Seta os rules para cada campo
     *
     * @return array
     */
    public function rules() {
        return [
            'modelo' => ['required'],
            'marca' => ['required'],
            'ano' => ['required'],
            'estilo' => [],
            'cilindrada' => [],
            'potencia' => [],
            'tanque' => [],
            'peso_seco' => [],
            'trasmissao' => [],
            'tipo_motor' => [],
            'refrigeracao' => [],
            'categoria' => [],
        ];
    }

    /**
     * Mensagens caso pare nos rules atribuidos
     * @return array
     */
    public function messages() {
        return [
            'modelo.required' => 'O campo "Modelo" não foi preenchido.',
            'marca.required' => 'O campo "Marca" não foi preenchido.',
            'ano.required' => 'O campo "Ano" não foi preenchido.',
        ];
    }

    /**
     * Pega a instancia de validação e adiciona o validador
     * @return type
     */
    protected function getValidatorInstance() {
        $validator = parent::getValidatorInstance();
        return $validator;
    }

}
