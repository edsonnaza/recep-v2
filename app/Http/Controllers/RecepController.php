<?php

namespace App\Http\Controllers;
use App\Models\Recep;
use App\Models\Departamento;

use Illuminate\Http\Request;


class RecepController extends Controller
{
    public function index()
    {
         
        

        
               $datas = Departamento::orderBy('orden','ASC')->get();
                                 
                return view('recep.index',compact('datas'));
                         
                   /* $dpto_nombre=$xreg['dpto_nombre'];
                                                $icon=$xreg['glyphicon'];
                                                $id_dpto=$xreg['id'];
                                                $xclass=$xreg['class'];
                                                $orden=$orden+1;*/

    }
}
