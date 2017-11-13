@extends('layouts.app')

@section('content')

<div class="row col-md-6 col-md-offset-3">
  <h2 class="text-center">Mis incidentes</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">Identificador</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Estado actual</th>
        <th class="text-center">Objetos</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($incidentes as $incidente)
        <tr>
          <td class="text-center"><a href="{{ route('incidentes.show', ['id' => $incidente->id ]) }}">{{ $incidente->id }}</a></td>
          <td class="text-center">{{ $incidente->descripcionIncidente }}</td>
          <td class="text-center">{{ $incidente->fechaIncidente }}</td>
          <td class="text-center">{{ $incidente->estado }}</td>
          <td class="">@foreach ($incidente->objetos as $objeto)
            <li>{{ $objeto->nombre }}</li>
          @endforeach</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <a class="pull-right btn btn-success" href="{{ route('incidentes.create') }}">
    Crear incidente
  </a>

</div>

@endsection
