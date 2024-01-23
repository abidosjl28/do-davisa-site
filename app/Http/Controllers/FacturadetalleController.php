<?php

namespace App\Http\Controllers;

use App\Models\Facturadetalle;

use Illuminate\Http\Request;
use App\Filters\FacturadetalleFilter;
use App\Http\Resources\FacturadetalleCollection;
use App\Http\Requests\StoreFacturadetalleRequest;
use App\Http\Requests\UpdateFacturadetalleRequest;
use App\Http\Resources\FacturadetalleResource;

class FacturadetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter=new FacturadetalleFilter();
        $queryItems=$filter->transform($request);
        $includeInvoices=$request->query('includeInvoices');
        $facturadetalles=Facturadetalle::where($queryItems);
        if($includeInvoices){
            $facturadetalles=$facturadetalles->with('invoices');
        }
        return new FacturadetalleCollection($facturadetalles->paginate(90000)->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacturadetalleRequest $request)
    {
        return new FacturadetalleResource(Facturadetalle::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Facturadetalle $facturadetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facturadetalle $facturadetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacturadetalleRequest $request, Facturadetalle $facturadetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facturadetalle $facturadetalle)
    {
        //
    }
}
