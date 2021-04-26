<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Escuela;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{



    /**
     * Muestra listado de alumnos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumnos.index', [
            'alumnos' => Alumno::orderBy('nombre', 'asc')->paginate(10),
        ]);
    }

    /**
     * Formulario para alta de alumnos
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuelas = Escuela::get();

        return view('alumnos.create')->with('escuelas', $escuelas);
    }

    /**
     * Guarda los campos de un alumno
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'    => 'required',//validacion requerido
            'apellidos' => 'required',//validacion requerido
            'fecha_nac'  => 'required'//validacion requerido

        ]);

        $alumno = Alumno::create([
            'nombre'    => request('nombre'),
            'apellidos' => request('apellidos'),
            'fecha_nac'  => request('fecha_nac'),
            'ciudad'     => request('ciudad'),
            'escuela_id'  => request('escuela_id')
        ]);

        return redirect()->route('alumnos.show', $alumno);

    }

    /**
     * Detalle info de alumno
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', [
            'alumno' => $alumno
        ]);
    }

    /**
     * Muestra formulario para actualizar alumno
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        $escuelas = Escuela::get();

        return view('alumnos.edit', [
            'alumno' => $alumno,
            'escuelas' => $escuelas
        ]);
    }

    /**
     * Actualiza cambios en alumno
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre'    => 'required',
            'apellidos' => 'required',
            'fecha_nac'  => 'required'

        ]);

        $alumno->update([
            'nombre'    => request('nombre'),
            'apellidos' => request('apellidos'),
            'fecha_nac'  => request('fecha_nac'),
            'ciudad'     => request('ciudad'),
            'escuela_id'  => request('escuela_id')
        ]);

        return redirect()->route('alumnos.show', $alumno);
    }

    /**
     * Elimina un alumno de la base de datos
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        return redirect()->route('alumnos.index');
    }
}
