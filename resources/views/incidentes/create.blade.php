@extends('layouts.base')

@section('content')

{!! Form::open(array('route' => 'incidentes.store','method'=>'POST')) !!}
  <div class="row col-md-6 col-md-offset-3">
    <h3 class="text-center">Nuevo incidente</h3>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Número de cliente:</strong>
              {!! Form::number('nroCliente', null, array('placeholder' => 'Número de cliente','class' => 'form-control')) !!}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Fecha de incidente:</strong>
          {!! Form::date('fechaIncidente', null, array('placeholder' => 'Fecha del incidente','class' => 'form-control')) !!}
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Descripción del incidente:</strong>
              {!! Form::textarea('descripcionIncidente', null, array('placeholder' => 'Descripción del incidente','class' => 'form-control')) !!}
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <p><a class='btn btn-xs btn-default' href="#" id="agregar_objetos">Agregar objeto</a></p>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12" id="noobjetos">Sin objetos</div>
      <div id="objetos"></div>
      <hr>

      <div class="col-xs-12 col-sm-12 col-md-12">
        {!! Form::submit('Crear incidente', array('class' => 'btn btn-success pull-right')) !!}
      </div>

  </div>

  {!! Form::close() !!}

  @include('objetos.objetos_template')

  <script>
      $(document).ready(function() {
          // functionality for the 'Add one' button
          var template = $('#hidden-template').html();
          $('#agregar_objetos').click(function() {
              if( $("#noobjetos").length) {
                  $("#noobjetos").remove();
              }
              var index = $('.js-new-objeto').length;
              $('#objetos').append(template.replace(/\{index\}/g, index));
          });
      });
    </script>

@endsection
