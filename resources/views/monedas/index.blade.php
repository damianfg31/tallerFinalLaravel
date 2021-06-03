@extends('app')
@section('content')
<h1 class="text-primary" style="color: #17202A;">Lista de Monedas en el Mundo</h1>
 
<table class="table table-bordered" id="tableMonedas">
  <thead>
    <tr>
        <th class="text-center">Id Moneda</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Activa</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($monedas as $moneda)
        <tr>
            <td class="text-center">{{ $moneda->idcurrency}}</td>
            <td class="text-center">{{ $moneda->currency}}</td>
            <td class="text-center">{{ $moneda->description }}</td>
            <td class="text-center">{{ $moneda->isactive}}</td>
            <td>
                <a href="{{ route('monedas.show', $moneda->idcurrency) }}" class="btn btn-info" style="background-color: #16A085">Ver más</a>
 
            </td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th class="text-center">Más Monedas Pronto...</th>
    </tr>
  </tfoot>
</table>
@stop