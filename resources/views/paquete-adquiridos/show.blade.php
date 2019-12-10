@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">PaqueteAdquirido {{ $paqueteadquirido->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/paquete-adquiridos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/paquete-adquiridos/' . $paqueteadquirido->id . '/edit') }}" title="Edit PaqueteAdquirido"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('paqueteadquiridos' . '/' . $paqueteadquirido->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete PaqueteAdquirido" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $paqueteadquirido->id }}</td>
                                    </tr>
                                    <tr><th> FechaInicio </th><td> {{ $paqueteadquirido->fechaInicio }} </td></tr><tr><th> FechaFin </th><td> {{ $paqueteadquirido->fechaFin }} </td></tr><tr><th> Precio </th><td> {{ $paqueteadquirido->precio }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
