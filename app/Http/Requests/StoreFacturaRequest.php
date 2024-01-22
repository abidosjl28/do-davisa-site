<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFacturaRequest extends FormRequest
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
            'CFMANIVEL'=>['required'],
            'CFMASERIE' => ['required'],
            'CFMANUMERO'=>['required'],
            'PERIODO'=>['required'],
            'DFMAFECHA'=>['required'],
            'CCTECODIGO'=>['nullable'],
            'CCTENIT'=>['nullable'],
            'CCTENOMBRE'=>['nullable'],
            'CCTEDIREC'=>['nullable'],
            'CVENCODIGO'=>['nullable'],
            'NETOMN'=>['required'],
            'IGVMN'=>['required'],
            'TOTMN'=>['required'],
            'CFPCODIGO'=>['required'],
            'CUSUALT'=>['required'],
            'DFECALT'=>['nullable'],
            'DFECALT_HORA'=>['nullable'],
            'CUSUMOD'=>['nullable'],
            'DFECMOD'=>['nullable'],
        ];
    }
}
