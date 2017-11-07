<script id="hidden-template" type="text/x-custom-template">
    <div class="form-group js-new-objeto">
        {!! Form::label('nombre', 'Nombre objeto', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('nombre{index}', null, array('class' => 'form-control', 'name' => 'objeto[{index}][nombre]' )) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('cantidad', 'Cantidad de objetos', ['class' => 'col-sm-2 control-label']) !!}
         <div class="col-sm-10">
             {!! Form::number('cantidad{index}', null, array('class' => 'form-control', 'name' => 'objeto[{index}][cantidad]')) !!}
         </div>
    </div>
    <div class="form-group">
        {!! Form::label('descripcion{index}', 'Descripción de daños a objetos', ['class' => 'col-sm-2 control-label']) !!}
         <div class="col-sm-10">
             {!! Form::textarea('descripcion', null, array('class' => 'form-control', 'name' => 'objeto[{index}][descripcion]')) !!}
         </div>
    </div>
</script>
