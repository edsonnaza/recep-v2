<?php

namespace App\Http\Controllers;
use App\Models\IngresarExamen;


use Illuminate\Http\Request;

class IngresarExamenController extends Controller
{
     public function index()
    {
        can('listar-ingresarexamen');
        $datas = IngresarExamen::orderBy('id')->get();
        return view('ingresarexamen.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        can('crear-ingresarexamen');
        return view('ingresarexamen.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $ingresarexamen = IngresarExamen::create($request->all());
        //$usuario->roles()->sync($request->rol_id);
       // return redirect('admin/usuario')->with('mensaje', 'Usuario creado con exito');

     
    //Seguro::create($request->all());
    return redirect('ingresarexamen')->with('mensaje', 'El examen se registró correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        
        $data = IngresarExamen::findOrFail($id);
        return view('ingresarexamen.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        IngresarExamen::findOrFail($id)->update($request->all());
        return redirect('ingresarexamen')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request,$id)
    {
        if ($request->ajax()) {
            $ingresarexamen = IngresarExamen::findOrFail($id);
            $ingresarexamen->delete();
            return response()->json(['mensaje' => 'ok']);
         } else {
            abort(404);
        }
    }
}
