<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = [
        'CODIGO',
        'LOCAL',
        'CFMANIVEL',
        'CFMASERIE',
        'CFMANUMERO',
        'PERIODO',
        'DFMAFECHA',
        'CCTECODIGO',
        'CCTENIT',
        'CCTENOMBRE',
        'CCTEDIREC',
        'CVENCODIGO',
        'NETOMN',
        'IGVMN',
        'TOTMN',
        'CFPCODIGO',
        'CUSUALT',
        'DFECALT',
        'DFECALT_HORA',
        'CUSUMOD',
        'DFECMOD'
    ];
}
