<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTurmaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
          return [
            'ano'=> 'required',
            'nome_turma'=> 'required|min:3',
            'professora'=> 'required|min:3',
          ];
    }
    public function messages()
    {
          return [
            'ano.required'=> 'Campo ano vazio',
            'nome_turma.required'=> 'Campo turma vazio',
    //        'nome_turma.min'=> 'Nome da turma dever ter no minimo de 3 caracteres',
            'professora.required'=> 'Campo professora vazio',
    //        'professora.min'=> 'Professora dever ter no minimo de 3 caracteres'
          ];
    }
}
