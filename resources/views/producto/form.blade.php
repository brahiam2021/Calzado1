<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $producto->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Stock') }}
            {{ Form::text('Stock', $producto->Stock, ['class' => 'form-control' . ($errors->has('Stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('Stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{-- {{ Form::label('estado') }}
            {{ Form::text('estado', $producto->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }} --}}
            <label for="estado" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-12">
                <select class="form-control" name="estado" id="estado">
                    @if($producto->estado=="Activo")
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                    @else
                    <option value="Inactivo">Inactivo</option>
                    <option value="Activo">Activo</option>
                    @endif
                </select>
            </div>
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>

                <a class="btn btn-black" style="margin-left:1%" href="{{ route('productos.index') }}">Regresar</a>

    </div>

