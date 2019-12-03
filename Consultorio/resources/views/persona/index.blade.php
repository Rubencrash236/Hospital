@extends('layouts.app')
@section('content')

    <div class = "container">
        <div class="row">
            <div class="col-md-10">
                <h3>Pacientes Registrados</h3>
            </div>
            <div class = "col-sm-2">
                <a class="btn btn-sm btn-success" href ="{{ route('Persona.create') }}">Registrar Paciente</a>
            </div>
        </div>
        
        @if ($message = Session::get('success'))
            <div class="alert alert-sucess">
                <p>{{$message}}</p>
            </div>
        @endif

        <table class = "table table-hover table-sm">
            <tr>
                <th width="50px"><b>id</b></th>
                <th width ="300px">Nombre Paciente</th>
                <th width="300px">Primer Apellido</th>
                <th width="180px">Accciones</th>
            </tr>

            @foreach ($personas as $persona)
            <tr>
                <td><b>{{$persona->id_persona}}</b></td>
                <td>{{$persona->primer_nombre}}</td>
                <td>{{$persona->segundo_nombre}}</td>
                <td>
                    <form action="{{ route('Persona.destroy', $persona->id_persona)}}" method ="post">
                        <a class="btn btn-sm btn-success" href="{{route('Persona.show',$persona->id_persona}}">Ver</a>
                        <a class="btn btn-sm btn-success" href="{{route('Persona.edit',$persona->id_persona}}">Editar</a>

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