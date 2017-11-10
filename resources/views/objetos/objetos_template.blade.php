<script id="hidden-template" type="text/x-custom-template">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group js-new-objeto">
        {!! Form::label('nombre', 'Nombre objeto', ['class' => 'control-label']) !!}
        {!! Form::text('nombre{index}', null, array('class' => 'form-control', 'name' => 'objeto[{index}][nombre]' )) !!}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        {!! Form::label('cantidad', 'Cantidad de objetos', ['class' => 'control-label']) !!}
        {!! Form::number('cantidad{index}', null, array('class' => 'form-control', 'name' => 'objeto[{index}][cantidad]')) !!}
      </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          {!! Form::label('descripcion{index}', 'Descripción de daños a objetos', ['class' => 'control-label']) !!}
          {!! Form::textarea('descripcion', null, array('class' => 'form-control', 'name' => 'objeto[{index}][descripcion]')) !!}
       </div>
  </div>
</script>
