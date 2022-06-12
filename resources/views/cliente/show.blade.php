@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $cliente->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Nacimiento:</strong>
                            {{ $cliente->Fecha_de_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $cliente->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $cliente->Categoria }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
