@extends('layouts.app')

@section('content')

<div class="row col-md-6 col-md-offset-3">
  <h2 class="text-center">Información sobre incidente número {{ $incidente->id }}: </h2>

  <h4>Url para consultar estado de incidente: <a href="{{ Request::url() }}">{{ Request::url() }}</a>.</h4>

  <ul>
    <li>
      Número de cliente: {{ $incidente->user_id }}
    </li>
    <li>
      Descripción de incidente: {{ $incidente->descripcionIncidente }}
    </li>
    <li>
      Fecha de incidente: {{ $incidente->fechaIncidente }}
    </li>
    <li>
      Cantidad total de objetos: {{ $cantidadObjetosTotal }}
    </li>
    <li>
      Objetos:
      <ul>
        @foreach ($incidente->objetos as $objeto)
          <li>Nombre: {{ $objeto->nombre }}</li>
          <li>Cantidad: {{ $objeto->cantidad}}</li>
          <li>Descripción: {{ $objeto->descripcion }}</li>
          <hr>
        @endforeach
      </ul>
    </li>
    <li>
      Estado de incidente: {{ $incidente->estado }}
    </li>
  </ul>
</div>

@endsection
