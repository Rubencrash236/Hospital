<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::latest()->paginate(5);
        return view('persona.index', compact('personas'))
            ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required',
            'primer_nombre'=>'required',
            'segundo_nombre'=>'',
            'primer_apellido'=>'required',
            'segundo_apellido'=>'',
            'fecha_nac'=>'',
            'sexo' => 'required',
            'ARS'=>'',
            'estatura'=>'required',
            'menarquia'=>'',
            'frecuencia_menstrual'=>'',
            'duracion_menstrual'=>'',
            'cantidad_embarazos'=>'',
            'cantidad_aborto'=>'',
            'cantidad_cesaria'=>'',
            'cantidad_partos_nat'=>'',
            'antecedentes_familiares'=>'',
            'habitos'=>'',
        ]);

        Persona::create($request->all());
        return redirect()->route('persona.index')
            ->with('success','Paciente registrado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personas = Persona::find($id);
        return view('persona.detail',compact('personas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personas = Persona::find($id);
        return view('persona.edit',compact('personas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cedula' => 'required',
            'primer_nombre'=>'required',
            'segundo_nombre'=>'',
            'primer_apellido'=>'required',
            'segundo_apellido'=>'',
            'fecha_nac'=>'',
            'sexo' => 'required',
            'ARS'=>'',
            'estatura'=>'required',
            'menarquia'=>'',
            'frecuencia_menstrual'=>'',
            'duracion_menstrual'=>'',
            'cantidad_embarazos'=>'',
            'cantidad_aborto'=>'',
            'cantidad_cesaria'=>'',
            'cantidad_partos_nat'=>'',
            'antecedentes_familiares'=>'',
            'habitos'=>'',
        ]);

        $personas = Persona::find($id);
        $personas->cedula = $request->get('cedula');
        $personas->primer_nombre = $request->get('primer_nombre');
        $personas->segundo_nombre = $request->get('segundo_nombre');
        $personas->primer_apellido = $request->get('primer_apellido');
        $personas->segundo_apellido = $request->get('segundo_apellido');
        $personas->fecha_nac = $request->get('fecha_nac');
        $persona->sexo = $request->get('sexo');
        $persona->ARS = $request->get('ARS');
        $persona->estatura = $request->get('estatura');
        $persona->menarquia = $request->get('menarquia');
        $persona->frecuencia_menstrual = $request->get('frecuencia_menstrual');
        $persona->cantidad_embarazos = $request->get('cantidad_embarazos');
        $persona->cantidad_aborto = $request->get('cantidad_aborto');
        $persona->cantidad_cesaria = $request->get('cantidad_cesaria');
        $persona->cantidad_partos_nat = $request->get('cantidad_partos_nat');
        $persona->antecedentes_familiares =$request->get('antecedentes_familiares');
        $persona->habitos = $request->get('habitos');
        $personas->save();
        return redirect()->route('persona.index')
                ->with('success','La operacion fue hecha con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personas = Persona::find($id);
        $personas->delete();
        return redirect()->route('persona.index')
                ->with('success', 'Borrado con resultado positivo');
    }
}
