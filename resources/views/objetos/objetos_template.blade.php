<script id="hidden-template" type="text/x-custom-template">
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre objeto', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('nombre', null, array('class' => 'form-control', 'name' => '' )) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('cantidad', 'Cantidad de objetos', ['class' => 'col-sm-2 control-label']) !!}
         <div class="col-sm-10">
             {!! Form::text('cantidad', null, array('class' => 'form-control', 'name' => 'supplement[new_{index}][amount]')) !!}
         </div>
    </div>
    <div class="form-group">
        {!! Form::label('descripcion', 'Descripción de daños a objetos', ['class' => 'col-sm-2 control-label']) !!}
         <div class="col-sm-10">
             {!! Form::text('descripcion', null, array('class' => 'form-control', 'name' => 'supplement[new_{index}][amount]')) !!}
         </div>
    </div>
</script>
