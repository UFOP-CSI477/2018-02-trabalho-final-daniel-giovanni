<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnoRequest extends FormRequest
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
           'ano' =>'required|numeric',
           'anoex'=> 'required|min:3',
           'ciclo'=> 'required|min:3',
         ];
     }
     public function messages()
     {
           return [
             'ano.required'=> 'Campo ano vazio',
             'anoex.required'=> 'Campo turma vazio',
             'ciclo.required'=> 'Campo professora vazio',
           ];
     }
}
