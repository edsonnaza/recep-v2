<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarDepartamento;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    public function index()
    {can('listar-departamentos');

        $datas = Departamento::All();
        // $sedes= Sede::All();

        return view('catastros.departamentos.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        can('crear-departamentos');
        return view('catastros.departamentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidarDepartamento $request)
    {
        $departamento = Departamento::create($request->all());

        return redirect('departamentos/crear')->with('mensaje', 'El registro se creó correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {can('editar-departamento');
        $data = Departamento::findOrFail($id);
        return view('catastros.departamentos.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidarDepartamento $request, $id)
    {

        Departamento::findOrFail($id)->update($request->all());
        return redirect('departamentos')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request, $id)
    {

        //  dd($id);
        if ($request->ajax()) {
            $query = Departamento::findOrFail($id);
            $query->delete();
            return response()->json(['mensaje' => 'ok']);
        } else {
            abort(404);
        }
    }

}