@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class = "col-lg-12">
                <h3>Editar Paciente</h3>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="aler alert-danger">
            <strong>Lo sentimos</strong> ocurrio un error.<br>
            <ul>
                @foreach($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('persona.update',$personas->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <strong>Cedula</strong>
                <input type="text" name="cedula" class="form-control" value ="{{$personas->cedula}}">
            </div>
            <div class="col-md-12">
                <strong>Primer Nombre</strong>
                <input type="text" name="primer_nombre" class="form-control" value ="{{$personas->primer_nombre}}">
            </div>
            <div class="col-md-12">
                <strong>Segundo Nombre</strong>
                <input type="text" name="segundo_nombre" class="form-control" value ="{{$personas->segundo_nombre}}">
            </div>
            <div class="col-md-12">
                <strong>Primer Apellido</strong>
                <input type="text" name="primer_apellido" class="form-control" value ="{{$personas->primer_apellido}}">
            </div>
            <div class="col-md-12">
                <strong>Segundo Apellido</strong>
                <input type="text" name="segundo_apellido" class="form-control" value ="{{$personas->segundo_apellido}}">
            </div>
            <div class="col-md-12">
                <strong>Fecha de Nacimiento</strong>
                <input type="date" name="fecha_nac" class="form-control" value ="{{$personas->fecha_nac}}">
            </div>

            <div class="col-md-12">
                <a href = "{{route('persona.index')}}" class = "btn btn-sm btn-success">Volver</a>
                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
            </div>


        </div>
    </form>
@endsection 