@extends('layouts.app')

@section('content')

{!! Form::open(array('route' => 'imagenes.store','method'=>'POST', 'files' => true)) !!}
  <div class="row col-md-6 col-md-offset-3">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Imagenes:</strong>
              {!! Form::file('nombre[]', ['multiple' => 'multiple', 'accept' => 'image/*']) !!}
          </div>
          <div class="form-group">
              {!! Form::hidden('incidente_id', $incidente_id ) !!}
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        {!! Form::submit('Subir', array('class' => 'btn btn-primary')) !!}
      </div>

  </div>

  {!! Form::close() !!}

@endsection
