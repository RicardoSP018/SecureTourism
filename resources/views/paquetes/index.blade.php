@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h1><div class="card-header">Paquetes</div></h1>
                    <div class="card-body">
                        <a href="{{ url('/paquetes/create') }}" class="btn btn-success btn-sm" title="Add New Paquete">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo Paquete
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Descripcion</th><th>Contenido</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($paquetes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nombre }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->contenido }}</td>
                                        <td>
                                            <a href="{{ url('/paquetes/' . $item->id) }}" title="View Paquete"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/paquetes/' . $item->id . '/edit') }}" title="Edit Paquete"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/paquetes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Paquete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $paquetes->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
