<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Controle de formulário do modelo especificado
 * @author Thiago Farias <thiago.farias@jointecnologia.com.br>
 * @version 31/05/2017
 */
class SolicitacaoPropostaFormRequest extends FormRequest
{
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
            'nome' => 'required',
            'telefone' => 'required',
            'mensagem' => 'required',
        ];
    }
    
    /**
     * Mensagens caso pare nos rules atribuidos
     * @return array
     */
    public function messages() {
        return [
            'nome.required' => 'O campo Nome não foi preenchido.',
            'telefone.required' => 'O campo Fone e Celular não foi preenchido.',
            'mensagem.required' => 'O campo Mensagem foi preenchido.',
        ];
    }
}