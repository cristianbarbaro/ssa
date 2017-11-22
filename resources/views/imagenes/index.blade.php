@extends('layouts.app')

@section('content')

<div class="row col-md-8 col-md-offset-2">
  <h2 class="text-center">Enlaces de imágenes asociadas al incidente número: {{$incidente_id}}</h2>

  <div class="container-fluid">
    <table class="table table-bordered container">
        <thead>
        <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Enlace temporal</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($shared_links as $nombre => $link)
            <tr>
            <td class="text-center">{{ $nombre }}</td>        
            <td class="text-center"><a href="{{$link}}">{{ $nombre }}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="pull-right btn btn-primary" href="{{ route('home') }}">
        Inicio
    </a>
  </div>

</div>

@endsection
