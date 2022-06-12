<div class="box box-info padding-1">
    <div class="box-body">
        
      
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $detalle->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalle->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_facturas') }}
            {{ Form::select('num_facturas', $facturas ,$detalle->num_facturas, ['class' => 'form-control' . ($errors->has('num_facturas') ? ' is-invalid' : ''), 'placeholder' => 'Num Facturas']) }}
            {!! $errors->first('num_facturas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_productos') }}
            {{ Form::select('id_productos', $productos ,$detalle->id_productos, ['class' => 'form-control' . ($errors->has('id_productos') ? ' is-invalid' : ''), 'placeholder' => 'Id Productos']) }}
            {!! $errors->first('id_productos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>