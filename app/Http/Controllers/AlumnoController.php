<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Escuela;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    //Check de role de usuario para permitir entrar en alumnos
    // function __construct()
    // {
    //     $this->middleware(['auth','is_admin:1']);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumnos.index', [
            'alumnos' => Alumno::orderBy('nombre', 'asc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuelas = Escuela::get();

        return view('alumnos.create')->with('escuelas', $escuelas);
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
            'nombre'    => 'required',//validacion re  querido
            'apellidos' => 'required',//validacion re  querido
            'fecha_nac'  => 'required'//validacion mime, dimensiones y tamaño max

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
     * Display the specified resource.
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
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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
