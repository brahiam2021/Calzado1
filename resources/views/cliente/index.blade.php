@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.csss">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Cliente') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="articulos" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Apellido</th>
										<th>Direccion</th>
										<th>Fecha De Nacimiento</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Categoria</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $cliente->Nombre }}</td>
											<td>{{ $cliente->Apellido }}</td>
											<td>{{ $cliente->Direccion }}</td>
											<td>{{ $cliente->Fecha_de_nacimiento }}</td>
											<td>{{ $cliente->Telefono }}</td>
											<td>{{ $cliente->Correo }}</td>
											<td>{{ $cliente->Categoria }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i>Dellate</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


<script>

    $('#articulos').DataTable({

 "language": {
            "lengthMenu":"Mostrar _MENU_ registro por pagina",
            "zeroRecords":"No se encontro ningun archivo-Lo siento",
            "info":"Pagina _PAGE_ De _PAGES_",
            "infoEmpty":"No records available",
            "infoFiltered":"(Filtradro de _MAX_ Registros totales)",
            "search":"Buscar:",
            "paginate":{"next":"Siguiente",
            "previous":"Anterior"}
        }
    });
</script>
@endsection
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
