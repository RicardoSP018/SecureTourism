@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">DispositivosAsignado {{ $dispositivosasignado->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/dispositivos-asignados') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/dispositivos-asignados/' . $dispositivosasignado->id . '/edit') }}" title="Edit DispositivosAsignado"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('dispositivosasignados' . '/' . $dispositivosasignado->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete DispositivosAsignado" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dispositivosasignado->id }}</td>
                                    </tr>
                                    <tr><th> Inicio </th><td> {{ $dispositivosasignado->Inicio }} </td></tr><tr><th> Final </th><td> {{ $dispositivosasignado->Final }} </td></tr><tr><th> Dispositivo Id </th><td> {{ $dispositivosasignado->dispositivo_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
