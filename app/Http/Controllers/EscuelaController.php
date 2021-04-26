<?php

namespace App\Http\Controllers;

use App\Escuela;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    /**
     * Muestra listado de escuelas en páginas de 5, ordenadas
     * alfabéticamente
     *
     * @return \Illuminate\Http\Response
     */

    //Check de role de usuario para permitir entrar en escuelas
    // function __construct()
    // {
    //     $this->middleware(['auth','is_admin']);
    // }
    public function index()
    {


        return view('escuelas.index', [
            'escuelas' => Escuela::orderBy('nombre', 'asc')->paginate(5)
        ]);
    }

    /**
     * Muestra el formulario para Alta Escuela
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escuelas.create', [
            'escuela' => new Escuela
        ]);
    }

    /**
     * Guarda datos formulario Alta Escuela
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre'    => 'required',//validacion re  querido
            'direccion' => 'required',//validacion re  querido
            'logotipo'  => 'image|dimensions:min_width=200,min_height=200|max:2048'//validacion mime, dimensiones y tamaño max

        ]);

        $escuela = Escuela::create([
            'nombre'    => request('nombre'),
            'direccion' => request('direccion'),
            'logotipo'  => request('logotipo'),
            'email'     => request('email'),
            'telefono'  => request('telefono'),
            'web'       => request('web')
        ]);

        if($request->hasFile('logotipo')){

            $escuela->logotipo = $request->file('logotipo')->store('public');

        }

        $escuela->save();

        return redirect()->route('escuelas.show', $escuela);
    }

    /**
     * Vista detalle de la escuela
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Escuela $escuela)
    {

        return view('escuelas.show', [
            'escuela' => $escuela
        ]);

    }

    /**
     * Vista de la escuela para editar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Escuela $escuela)
    {
            return view('escuelas.edit', [
                'escuela' => $escuela
            ]);
    }

    /**
     * Actualiza el contenido de la escuela
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escuela $escuela)
    {
        //Si se actualiza el logotipo vuelve a validar mime, dimensiones y tamaño, tambien required de nombre y direccion
        $request->validate([
            'nombre'    => 'required',
            'direccion' => 'required',
            'logotipo'  => 'image|dimensions:min_width=200,min_height=200|max:2048'

        ]);

        //Si se añade una nueva imagen, la almacena en storage y actualiza su url junto al resto de campos
        if($request->hasFile('logotipo')){

                 $escuela->logotipo = $request->file('logotipo')->store('public');
                 $escuela->update([
                    'nombre'    => request('nombre'),
                    'direccion' => request('direccion'),
                    'logotipo'  => $escuela->logotipo,
                    'email'     => request('email'),
                    'telefono'  => request('telefono'),
                    'web'       => request('web')
                ]);

        }

        // Si no se elige nueva imagen, solo se actualizan el resto de campos
        else{
            $escuela->update([
                'nombre'    => request('nombre'),
                'direccion' => request('direccion'),
                // 'logotipo'  => request('logotipo'),
                'email'     => request('email'),
                'telefono'  => request('telefono'),
                'web'       => request('web')
            ]);
        }



        return redirect()->route('escuelas.show', $escuela);
    }

    /**
     * Elimina la escuela
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escuela $escuela)
    {
        $escuela->delete();

        return redirect()->route('escuelas.index');
    }
}
