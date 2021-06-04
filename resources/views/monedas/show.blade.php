@extends('app')
@section('content')

<h1  style="color: #17202A;">
  <i class="fas fa-info-circle"></i> Descripción Moneda: "{{ $moneda->currency}}"
</h1>
   
  <p> <b>Id moneda:</b> {{ $moneda->idcurrency}}</p>
  <p><b>Moneda:</b> {{ $moneda->currency}}</p>
  <p><b>Descripción:</b> {{ $moneda->description }}</p>
  <p><b>Activa:</b> {{ $moneda->isactive}}</p>
  <p><b>Iso:</b> {{$moneda->isocode}}</p>
  <p><b>Símbolo:</b> {{$moneda->cursymbol}}</p>
  <p><b>Precisión:</b> {{$moneda->precisionstd}}</p>
  <p><b>Precisión costes:</b> {{$moneda->precisioncost}}</p>
  <p><b>Precisión precio:</b> {{$moneda->precisionprize}}</p>
  <p><b>Fecha creación:</b> {{$moneda->created_at }}</p>
  <hr>
   
  <b><a style="color: #16A085" href="{{ route('monedas.index') }}">Volver a Inicio</a></b>
  <br>
  <b> <a style="color: #16A085" href="{{ route('monedas.show', $moneda->idcurrency) }}">Actualizar Página</a></b>
  @stop