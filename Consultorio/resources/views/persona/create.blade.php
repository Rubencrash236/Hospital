@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class = "col-lg-12">
                <h3>Registrar Paciente</h3>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="aler alert-danger">
            <strong>Rellene los campos obligatorios marcados con un *</strong>
            <ul>
                @foreach($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('persona.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <strong>Cedula *</strong>
                <input type="text" name="cedula" class="form-control" placeholder="Cedula...">
            </div>
            <div class="col-md-12">
                <strong>Primer Nombre *</strong>
                <input type="text" name="primer_nombre" class="form-control" placeholder="Primer Nombre...">
            </div>
            <div class="col-md-12">
                <strong>Segundo Nombre</strong>
                <input type="text" name="segundo_nombre" class="form-control" placeholder="Segundo Nombre...">
            </div>
            <div class="col-md-12">
                <strong>Primer Apellido *</strong>
                <input type="text" name="primer_apellido" class="form-control" placeholder="Primer Apellido...">
            </div>
            <div class="col-md-12">
                <strong>Segundo Apellido</strong>
                <input type="text" name="segundo_apellido" class="form-control" placeholder="Segundo Apellido...">
            </div>
            <div class="col-md-12">
                <strong>Sexo *</strong>
                <input type="text" name="sexo" class="form-control" placeholder="M o F">
            </div>
            <div class="col-md-12">
                <strong>Fecha de Nacimiento *</strong>
                <input type="date" name="fecha_nac" class="form-control" placeholder="Fecha Nacimiento...">
            </div>
            <div class="col-md-12">
                <strong>Estatura *</strong>
                <input type="number" name="estatura" class="form-control" placeholder="Estatura en cm">
            </div>
            <div class="col-md-12">
                <strong>ARS</strong>
                <input type="text" name="ARS" class="form-control" placeholder="ARS...">
            </div>
            <div class="col-md-12">
                <strong>Menarquia</strong>
                <input type="number" name="menarquia" class="form-control" placeholder ="0">
            </div>
            <div class="col-md-12">
                <strong>Frecuencia Menstrual</strong>
                <textarea type="text" name="frecuencia_menstrual" class="form-control" rows="8" cols="80" placeholder="1 vez por mes"></textarea>
            </div>
            <div class="col-md-12">
                <strong>Duracion Menstrual</strong>
                <textarea type="text" name="duracion_menstrual" class="form-control" rows="8" cols="80" placeholder="Duracion en dias o semanas"></textarea>
            </div>
            <div class="col-md-12">
                <strong>Cantidad Embarazos</strong>
                <input type="number" name="cantidad_embarazos" class="form-control" placeholder ="0">
            </div>
            <div class="col-md-12">
                <strong>Cantidad Cesarias</strong>
                <input type="number" name="cantidad_cesarias" class="form-control" palceholder="0">
            </div>
            <div class="col-md-12">
                <strong>Cantidad de Partos Naturales</strong>
                <input type="number" name="cantidad_partos_nat" class="form-control" placeholder = "0">
            </div>
            <div class="col-md-12">
                <strong>Antecedentes Familiares</strong>
                <textarea type="text" name="antecedentes_familiares" class="form-control" rows="8" cols="80" placeholder=""></textarea>
            </div>
            <div class="col-md-12">
                <strong>Habitos</strong>
                <textarea type="text" name="habitos" class="form-control" rows="8" cols="80" placeholder="Habitos del paciente"></textarea>
            </div>
            
            <div class="col-md-12">
                <a href = "{{route('persona.index')}}" class = "btn btn-sm btn-success">Volver</a>
                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
            </div>


        </div>
    </form>
@endsection 