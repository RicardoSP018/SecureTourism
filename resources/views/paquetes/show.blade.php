@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Paquete {{ $paquete->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/paquetes') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/paquetes/' . $paquete->id . '/edit') }}" title="Edit Paquete"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('paquetes' . '/' . $paquete->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Paquete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $paquete->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $paquete->Nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $paquete->descripcion }} </td></tr><tr><th> Contenido </th><td> {{ $paquete->contenido }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
