{!! Form::open(array('route' => 'imagenes.store','method'=>'POST', 'files' => true)) !!}
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Imagenes:</strong>
              {!! Form::file('nombre[]', ['multiple' => 'multiple']) !!}
          </div>
          <div class="form-group">
              {!! Form::hidden('incidente_id', $incidente_id ) !!}
          </div>
      </div>

      {!! Form::submit('Subir', array('class' => 'btn btn-primary')) !!}

  </div>

  {!! Form::close() !!}
