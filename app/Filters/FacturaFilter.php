<?php 
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class FacturaFilter extends ApiFilter{

    protected $safeParams=[
        'CODIGO' => ['eq'],
        'CFMANIVEL' => ['eq'],
        'CFMASERIE' => ['eq'],
        'CFMANUMERO' => ['eq'],
        'PERIODO' => ['eq'],
        'DFMAFECHA' => ['eq'],
        'CCTECODIGO' => ['eq','gt','lt'],

    ];
    protected $columnMap=[
        'postaCode'=>'postal_code'
    ];
    protected $operatorMap=[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
        

    ];

    
}