<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlunoRequest extends FormRequest
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

      'cod_turma'=> 'required',
      'nome'=> 'required',
      'pai'=> 'required',
      'mae'=> 'required',
      'sexo'=> 'required',
      'data_nasc'=> 'required',
      'telefone'=> 'required',
      'naturalidade'=> 'required',
      'bairro'=> 'required',
      'rua'=> 'required',
      'numero'=> 'required',
      'estado'=> 'required',

    ];
  }

  public function messages()
  {
        return [
          'cod_turma.required'=> 'Codigo turma vazio',
          'nome.required'=> 'Campo nome vazio',
          'pai.required'=> 'Campo pai vazio',
          'mae.required'=> 'Campo mae vazio',
          'sexo.required'=> 'Campo sexo vazio',
          'data_nasc.required'=> 'Campo data nascimento vazio',
          'telefone.required'=> 'Campo telefone vazio',
          'naturalidade.required'=> 'Campo naturalidade vazio',
          'bairro.required'=> 'Campo bairro vazio',
          'rua.required'=> 'Campo rua vazio',
          'numero.required'=> 'Campo numero vazio',
          'estado.required'=> 'Campo estado vazio',
        ];
  }



}
