@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h1><div class="card-header">Guias</div></h1>
                    <div class="card-body">
                        <a href="{{ url('/guias/create') }}" class="btn btn-success btn-sm" title="Add New Guia">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo Guia
                        </a>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($guias as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nombre }}</td><td>{{ $item->apellido }}</td><td>{{ $item->edad }}</td>
                                        <td>
                                            <a href="{{ url('/guias/' . $item->id) }}" title="View Guia"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/guias/' . $item->id . '/edit') }}" title="Edit Guia"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/guias' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Guia" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $guias->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
