@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Suscripcion {{ $suscripcion->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/suscripcions') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/suscripcions/' . $suscripcion->id . '/edit') }}" title="Edit Suscripcion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('suscripcions' . '/' . $suscripcion->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Suscripcion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $suscripcion->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $suscripcion->nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $suscripcion->descripcion }} </td></tr><tr><th> Estado </th><td> {{ $suscripcion->estado }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
