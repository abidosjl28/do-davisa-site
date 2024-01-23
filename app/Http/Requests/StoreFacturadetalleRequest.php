<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFacturadetalleRequest extends FormRequest
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
            'CODIGO' => ['required'],
            'CODIGOSUB' => ['required'],
            'LOCAL' => ['required'],
          
            'CFMANIVEL'=>['required'],
            'CFMASERIE' => ['required'],
            'CFMANUMERO'=>['required'],
            'CFACLINEA'=>['required'],
            'CARTCODIGO'=>['required'],
            'CARTDESCRI'=>['nullable'],
            'CANTIDAD'=>['nullable'],
            'CUNICODIGO'=>['nullable'],
            'PLISMN'=>['nullable'],
            'PVTAMN'=>['nullable'],
            'BRUTMN'=>['required'],
            'NETOMN'=>['required'],
            'CCOTNUMERO'=>['nullable'],
          
        ];
    }
}
