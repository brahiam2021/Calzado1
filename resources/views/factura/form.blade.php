<div class="box box-info padding-1">
    <div class="box-body">
 

        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::select('id_cliente', $clientes ,$factura->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $factura->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>