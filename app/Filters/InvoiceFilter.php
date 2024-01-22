<?php 
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class InvoiceFilter extends ApiFilter{

    protected $safeParams=[
        'customerID' => ['eq'],
        'amount' => ['eq','gt','gte','lt','lte'],
        'status' => ['eq','ne'],
        'billedDate' => ['eq','gt','gte','lt','lte'],
        'paidDate' => ['eq','gt','gte','lt','lte']

    ];
    protected $columnMap=[
        'customerID'=>'customer_id',
        'billedDate'=>'paid_dated',
        'paidDate'=>'paid_dated'
    ];
    protected $operatorMap=[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne'=>'!='
        

    ];

    
}