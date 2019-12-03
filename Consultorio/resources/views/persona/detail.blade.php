@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class ="col-md-12">
                <h3>Detalles</h3>
                <hr>
            </div>

            <div class ="row">
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Cedula</strong> {{$personas->cedula}}
                    </div>
                </div>
            
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong> Primer Nombre</strong> {{$personas->primer_nombre}}
                    </div>
                </div>
            
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong> Segundo Nombre</strong> {{$personas->segundo_nombre}}
                    </div>
                </div>
            
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong> Primer Apellido</strong> {{$personas->primer_apellido}}
                    </div>
                </div>
            
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong> Segundo Apellido</strong> {{$personas->segundo_apellido}}
                    </div>
                </div>
            
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Fecha Nacimiento</strong> {{$personas->fecha_nac}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Sexo</strong> {{$personas->sexo}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Estatura</strong> {{$personas->estatura}} cm. 
                    </div>
                </div>

                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>ARS</strong> {{$personas->ARS}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Menarquia</strong> {{$personas->menarquia}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Frecuencia Menstrual</strong> {{$personas->frecuencia_menstrual}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Duracion Menstrual</strong> {{$personas->duracion_menstrual}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Cantidad de Embarazos</strong> {{$personas->cantidad_embarazos}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Cantidad de Abortos</strong> {{$personas->cantidad_aborto}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Cantidad de Cesarias</strong> {{$personas->cantidad_cesaria}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Cantidad de Partos Naturales</strong> {{$personas->cantidad_partos_nat}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Antecedentes Familiares</strong> {{$personas->antecedentes_familiares}}
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class="form-group">
                        <strong>Habitos</strong> {{$personas->habitos}}
                    </div>
                </div>            
                <div class ="col-md-12">
                    <a href="{{route('persona.index')}}" class="btn btn-sm btn-success">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection