<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function index(Request $request){
        $date = \Carbon\Carbon::today()->subDays(30);

        $invoices = Invoice::where('pagadas', false)
            ->where('created_at','>=',$date)
            ->select(
                'numeroFacturas',
                'importeTotal',
                'fechaDesde',
                'fechaHasta'
            )
            ->get();
        return $invoices;
    }
    
    function show(Request $request){
        $invoice = Invoice::find($request['id']);
        return $invbice;
    }

    function update(Request $request){

    }

    function delete(Request $request){

    }
}
