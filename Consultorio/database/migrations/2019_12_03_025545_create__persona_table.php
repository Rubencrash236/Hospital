<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula', 20)->unique();
            $table->string('primer_nombre',50);
            $table->string('segundo_nombre',50)->nullable(true);
            $table->string('primer_apellido',50);
            $table->string('segundo_apellido',50)->nullable(true);
            $table->string('sexo',1);
            $table->date('fecha_nac');
            $table->float('estatura',8,2);
            $table->string('ARS',20)->nullablephp(true);
            $table->integer('menarquia')->nullable(true);
            $table->string('frecuencia_menstrual',100)->nullable(true);
            $table->string('duracion_menstrual',100)->nullable(true);
            $table->integer('cantidad_embarazos')->nullable(true);
            $table->integer('cantidad_aborto')->nullable(true);
            $table->integer('cantidad_cesaria')->nullable(true);
            $table->integer('cantidad_partos_nat')->nullable(true);
            $table->longText('antecedentes_familiares')->nullable(true);
            $table->longText('habitos')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Persona');
    }
}
