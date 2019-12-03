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
                    <a href="{{route('persona.index')}}" class="btn btn-sm btn-success">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection