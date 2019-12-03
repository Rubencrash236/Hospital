@extends('layouts.app')
@section('content');

    <div class = "container">
        <div class ="row">
            <div class = "col-md-10">
                <h3>Lista de Pacientes</h3>
            </div>
            <div class = "col-sm-2">
                <a class ="btn btn-sm btn-sucess" href = "{{ route('persona.create')}}">Registrar un paciente</a> 
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class = "alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

    <table class = "table table-hover table-sm">
        <tr>
            <th width = "50px"><b>No.</b></th>
            <th width = "300px">Nom. Paciente</th>
            <th>Apellido</th>
            <th width = "180px">Acciones</th>
        </tr>

        @foreach ($Persona as $persona)
            <tr>
                <td><b>{{++$persona->cedula}}</b></td>
                <td><b>{{++$persona->primer_nombre}}</b></td>
                <td><b>{{++$persona->primer_apellido}}</b></td>
                <td>
                    <form action="{{route('persona.destroy',$persona->id_persona)}}" method="">
                        <a class = "btn btn-sm btn-success" href = "{{route('persona.show',$persona->id_persona)}}">Consultas</a>
                        <a class = "btn btn-sm btn-warning" href = "{{route('persona.edit',$persona->id_persona)}}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Borrar</buton>
                        
                    </form>
                </td>
            </td>
        @endforeach
    </table>
    {!! $persona->links() !!}

    </div>

@endsection