<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;

class BooksController extends Controller
{
     
   public function index()
    {            
        return view('libros.index');//, compact('datas'));
    }
     
    public function store(Request $request)
    {
        $data=$request->all();
        $token=Arr::pull($data, '_token'); // elimino el _token del array que envíe el propio proyecto.
         $orden=array();

        foreach ($data as $key=>$value) { 
            if ($value!=$token){ // aqui comparo el token evitando cargar en el nuevo array ordenado
                    array_push($orden,$value); // aqui registro el nuevo array ordenado sin el _token
                }
        }
          
         //Aqui ordeno el array final y envio a la vista.
          $libros=Arr::sort($orden);  
           return view('libros.index',compact('libros'));

    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
