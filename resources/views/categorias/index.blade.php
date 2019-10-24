@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h1><div class="card-header">Categorias</div></h1>
                    <div class="card-body">
                        <a href="{{ url('/categorias/create') }}" class="btn btn-success btn-sm" title="Add New Categoria">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva Categoria
                        </a>
<br><br>


                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Descripcion</th><th>Imagen</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categorias as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->imagen }}</td>
                                        <td>
                                            <a href="{{ url('/categorias/' . $item->id) }}" title="View Categoria"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/categorias/' . $item->id . '/edit') }}" title="Edit Categoria"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/categorias' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Categoria" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $categorias->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
