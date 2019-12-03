<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $table = "Persona";
    protected $fillable = ['cedula','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','fecha_nac'];
}
