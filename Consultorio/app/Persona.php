<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['cedula','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','fecha_nac'];
}
