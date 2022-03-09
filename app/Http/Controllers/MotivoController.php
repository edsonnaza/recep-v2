<?php

namespace App\Http\Controllers;

use App\Models\Motivo;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarMotivo;

class MotivoController extends Controller
{
    public function index()
    {can('listar-motivos');

        //$datas = Motivo::All()->toArray();
        $datas = Motivo::All();
        //dd($datas);
        //return response()->json($datas);
        // $sedes= Sede::All();

        


         return view('catastros.motivos.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        can('crear-motivos');
        return view('catastros.motivos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidarMotivo $request)
    {
        $motivo = Motivo::create($request->post());

       /* return response()->json([
            'motivo' => $motivo,
        ]);*/

         return redirect('motivos')->with('mensaje', 'El registro se creó correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {can('editar-motivos');
        $data = Motivo::findOrFail($id);
        return view('catastros.motivos.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidarMotivo $request,$id)
    {

        /*$motivo->fill($request->post())->save();
        return response()->json([
            'motivo' => $blog,
        ]);*/
        Motivo::findOrFail($id)->update($request->all());
         return redirect('motivos')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request,$id)
    {
        if ($request->ajax()) {
        $especialidad = Motivo::findOrFail($id);
        $especialidad->delete();
        return response()->json(['mensaje' => 'ok']);
                } else {
        abort(404);
                }

    }

}