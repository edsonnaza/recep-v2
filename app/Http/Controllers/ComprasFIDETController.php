<?php

namespace App\Http\Controllers;

use App\Models\ComprasFIDET;
use Illuminate\Http\Request;
use App\Models\Motivo;
use App\Models\Persona;

class ComprasFIDETController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('index-buscarproductos');
    }

public function motivosdatos(Request $request)
    {
         


       $search = $request->search;

      if($search == ''){
         $autocomplate = Persona::orderby('full_name_persona','asc')->select('id','full_name_persona','nro_mobil')->limit(5)->get();
      }else{
         $autocomplate = Persona::orderby('full_name_persona','asc')->select('id','full_name_persona','nro_mobil')->where('full_name_persona', 'like', '%' .$search . '%')->limit(5)->get();
      }

      $response = array();
      foreach($autocomplate as $autocomplate){
         $response[] = array("value"=>$autocomplate->id,"label"=>$autocomplate->full_name_persona,"nro_mobil"=>$autocomplate->nro_mobil);
      }

      echo json_encode($response);
      exit;
 
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComprasFIDET  $comprasFIDET
     * @return \Illuminate\Http\Response
     */
    public function show(ComprasFIDET $comprasFIDET)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComprasFIDET  $comprasFIDET
     * @return \Illuminate\Http\Response
     */
    public function edit(ComprasFIDET $comprasFIDET)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComprasFIDET  $comprasFIDET
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComprasFIDET $comprasFIDET)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComprasFIDET  $comprasFIDET
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComprasFIDET $comprasFIDET)
    {
        //
    }
}
