<?php

namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class FacturadetalleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'CODIGO' => $this->CODIGO,
            'CODIGOSUB' => $this->CODIGOSUB,
            'LOCAL' => $this->LOCAL,
            'CFMANIVEL'=>$this->CFMANIVEL,
            'CFMASERIE' => $this->CFMASERIE,
            'CFMANUMERO'=>$this->CFMANUMERO,
            'PERIODO'=>$this->PERIODO,
            'CFACLINEA'=>$this->CFACLINEA,
            'CARTCODIGO'=>$this->CARTCODIGO,
            'CARTDESCRI'=>$this->CARTDESCRI,
            'CANTIDAD'=>$this->CANTIDAD,
            'CUNICODIGO'=>$this->CUNICODIGO,
            'PLISMN'=>$this->PLISMN,
            'PVTAMN'=>$this->PVTAMN,
            'IGVMN'=>$this->IGVMN,
            'BRUTMN'=>$this->BRUTMN,
            'NETOMN'=>$this->NETOMN,
            'CCOTNUMERO'=>$this->CCOTNUMEROpo


        ];
    }
}
