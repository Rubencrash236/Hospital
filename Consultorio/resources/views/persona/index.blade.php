@extends('layouts.app')
@section('content')

    <div class = "container">
        <div class="row">
            <div class="col-md-10">
                <h3>Pacientes Registrados</h3>
            </div>
            <div class = "col-sm-2">
                <a class="btn btn-sm btn-success" href ="{{ route('persona.create') }}">Registrar Paciente</a>
            </div>
        </div>
        
        @if ($message = Session::get('success'))
            <div class="alert alert-sucess">
                <p>{{$message}}</p>
            </div>
        @endif

        <table class = "table table-hover table-sm">
            <tr>
                <th width="100px"><b>cedula</b></th>
                <th width ="300px">Nombre Paciente</th>
                <th width="300px">Primer Apellido</th>
                <th width="180px">Accciones</th>
            </tr>

            @foreach ($personas as $persona)
            <tr>
                <td><b>{{$persona->cedula}}</b></td>
                <td>{{$persona->primer_nombre}}</td>
                <td>{{$persona->primer_apellido}}</td>
                <td>
                    <form action="{{ route('persona.destroy', $persona->id)}}" method ="post">
                        <a class="btn btn-sm btn-success" href="{{route('persona.show',$persona->id)}}">Ver</a>
                        <a class="btn btn-sm btn-success" href="{{route('persona.edit',$persona->id)}}">Editar</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                    
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $personas->links() !!}
    </div>
@endsection