@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h1><div class="card-header">Proveedores</div></h1>
                    <div class="card-body">
                        <a href="{{ url('/proveedores/create') }}" class="btn btn-success btn-sm" title="Add New proveedore">
                            <i class="fa fa-plus" aria-hidden="true"></i> Proveedor
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Correo</th><th>Direccion</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($proveedores as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nombre }}</td><td>{{ $item->Correo }}</td><td>{{ $item->Direccion }}</td>
                                        <td>
                                            <a href="{{ url('/proveedores/' . $item->id) }}" title="View proveedore"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/proveedores/' . $item->id . '/edit') }}" title="Edit proveedore"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/proveedores' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete proveedore" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $proveedores->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
