@extends('layouts.app')

@section('template_title')
    Factura
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
                                {{ __('Factura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva factura') }}
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

										<th>Id Cliente</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facturas as $factura)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $factura->id_cliente }}</td>
											<td>{{ $factura->fecha }}</td>

                                            <td>
                                                <form action="{{ route('facturas.destroy',$factura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('facturas.show',$factura->id) }}"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('facturas.edit',$factura->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
            "lengthMenu": "Mostrar _MENU_ registro por pagina",
            "zeroRecords": "No se encontro ningun archivo-Lo siento",
            "info": "Pagina _PAGE_ De _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Filtradro de _MAX_ Registros totales)",
            "search":"Buscar:",
            "paginate":{ "next":"Siguiente",
            "previous":"Anterior"}
        }


    });



</script>

@endsection
                        </div>
                    </div>
                </div>
                {!! $facturas->links() !!}
            </div>
        </div>
    </div>
@endsection
