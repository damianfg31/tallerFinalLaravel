<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Http\Requests;
 
use App\CbCurrency;

class CbCurrencyController extends Controller
{
    /**
     * Muestra una lista de monedas
     * 
     * @return Response
     */

     public function index()
     {
         $monedas = CbCurrency::get(); //Devolverá las monedas
         return view('monedas.index')->with('monedas', $monedas);
     }

     /**
      * Muestra la moneda seleccionada por id
      * @param $IdCurrency
      * @return Response
      */

     public function show($IdCurrency)
     {
        // Devuelve la moneda seleccionada por id.
        $moneda = CbCurrency::find($IdCurrency);
        return view('monedas.show')->with('moneda', $moneda);
     }
}
