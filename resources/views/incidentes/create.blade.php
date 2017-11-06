<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

{!! Form::open(array('route' => 'incidentes.store','method'=>'POST')) !!}
  <div class="row">
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

      <h3>Objetos <a class='btn btn-xs btn-default' href="#" id="agregar_objeto">Agregar un objeto</a></h3>

      {!! Form::submit('Crear', array('class' => 'btn btn-primary')) !!}

  </div>

  {!! Form::close() !!}
