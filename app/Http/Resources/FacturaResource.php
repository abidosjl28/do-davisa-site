<?php

namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class FacturaResource extends JsonResource
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
            'CFMANIVEL'=>$this->CFMANIVEL,
            'CFMASERIE' => $this->CFMASERIE,
            'CFMANUMERO'=>$this->CFMANUMERO,
            'PERIODO'=>$this->PERIODO,
            'DFMAFECHA'=>$this->DFMAFECHA,
            'CCTECODIGO'=>$this->CCTECODIGO,
            'CCTENIT'=>$this->CCTENIT,
            'CCTENOMBRE'=>$this->CCTENOMBRE,
            'CCTEDIREC'=>$this->CCTEDIREC,
            'CVENCODIGO'=>$this->CVENCODIGO,
            'NETOMN'=>$this->NETOMN,
            'IGVMN'=>$this->IGVMN,
            'TOTMN'=>$this->TOTMN,
            'CFPCODIGO'=>$this->CFPCODIGO,
            'CUSUALT'=>$this->CUSUALT,
            'DFECALT'=>$this->DFECALT,
            'DFECALT_HORA'=>$this->DFECALT_HORA,
            'CUSUMOD'=>$this->CUSUMOD,
            'DFECMOD'=>$this->DFECMOD
           


        ];
    }
}
