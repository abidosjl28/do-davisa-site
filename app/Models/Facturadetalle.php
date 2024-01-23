<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturadetalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'CODIGO',
'CODIGOSUB',
'LOCAL',
'CFMANIVEL',
'CFMASERIE',
'CFMANUMERO',
'CFACLINEA',
'CARTCODIGO',
'CARTDESCRI',
'CANTIDAD',
'CUNICODIGO',
'PLISMN',
'PVTAMN',
'BRUTMN',
'NETOMN',
'CCOTNUMERO'
    ];
}
