<?php

namespace App\Http\Controllers;
use App\Models\Recep;
use App\Models\Departamento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Persona;
use App\Models\ClasificacionPersona;
use App\Models\Clasificacion;
use App\Repositories\RecepClass;



class RecepController extends Controller
{
    protected $receps;

    public function __construct(RecepClass $receps){
            $this->receps = $receps;
    }



        public function home(){
            return view('welcome');
        }
    public function index()
    {
              $datas = Departamento::orderBy('orden','ASC')->get();
                                 
                return view('recep.index',compact('datas'));
                
    }

            public function guardar(Request $request)
            {                 
                $id_visitante=$request->id_visitante;
                $persona=Persona::find($id_visitante);
                /* Book::updateOrCreate(['id' => $request->book_id],
                ['title' => $request->title, 'author' => $request->author]);   
                     */
            /*    $now = Carbon::now()->toDateTimeString();
                $datos =  ( [
              
               'id_visitante'=>$request->id_visitante,
                'nombre_visitante'=>$request-> nombre_visitante,
                'empresa_origen'=>$request-> empresa_origen ,
                'comentario_visitante'=>$request-> comentario_visitante ,
                'id_colaborador'=>$request-> id_colaborador ,
                'id_motivo'=>$request-> id_motivo ,
                'colaborador'=>$request-> colaborador ,
                'id_dpto'=>$request-> id_dpto ,
                'hora_atencion'=> $now ,
                'motivo'=>$request-> motivo  ,
                'id_dpto'=>$request-> id_dpto ,
                'nombre_colaborador'=>$request-> nombre_colaborador ,
                'comentario_colaborador'=>$request-> comentario_colaborador ,
                'id_colaborador_atencion'=>$request-> id_colaborador_atencion ,
                'sede_id'=>$request-> sede_id ,
                'id_colaborador'=>$request-> id_colaborador ,
                'nombre_colaborador'=>$request-> nombre_colaborador ,
                'comentario_colaborador'=>$request-> comentario_colaborador
              ]);
   
                return response()->json(['code'=>200, 'message'=>'Post Created successfully','data' => $datos], 200);

                */
                // EXTRAER DATOS 
               
                /*$datos=array('id_visitante'=>$request->input('id_visitante'),
                'nombre_visitante'=>$request->input('nombre_visitante'),
                'empresa_origen'=>$request->input('empresa_origen'),
                'comentario_visitante'=>$request->input('comentario_visitante'),
                'id_colaborador'=>$request->input('id_colaborador'),
                'id_motivo'=>$request->input('id_motivo'),
                'colaborador'=>$request->input('colaborador'),
                'id_dpto'=>$request->input('id_dpto'),
                'hora_atencion'=> $now ,
                'motivo'=>$request->input('motivo') ,
                'id_dpto'=>$request->input('id_dpto'),
                'nombre_colaborador'=>$request->input('nombre_colaborador'),
                'comentario_colaborador'=>$request->input('comentario_colaborador'),
                'id_colaborador_atencion'=>$request->input('id_colaborador_atencion'),
                'sede_id'=>$request->input('sede_id'),
                'id_colaborador'=>$request->input('id_colaborador'));*/

                $now = Carbon::now()->toDateTimeString();
                $datos =array(
              
                'id_visitante'=>$request->id_visitante,
                    'nombre_visitante'=>$request-> nombre_visitante,
                    'empresa_origen'=>$request-> empresa_origen ,
                    'comentario_visitante'=>$request-> comentario_visitante ,
                    'id_colaborador'=>$request-> id_colaborador ,
                    'id_motivo'=>$request-> id_motivo ,
                    'colaborador'=>$request-> colaborador ,
                    'id_dpto'=>$request-> id_dpto ,
                    'hora_atencion'=> $now ,
                    'motivo'=>$request-> motivo  ,
                    'id_dpto'=>$request-> id_dpto ,
                    'nombre_colaborador'=>$request-> nombre_colaborador ,
                    'comentario_colaborador'=>$request-> comentario_colaborador ,
                    'id_colaborador_atencion'=>$request-> id_colaborador_atencion ,
                    'sede_id'=>$request-> sede_id ,
                    'id_colaborador'=>$request-> id_colaborador ,
                    'nombre_colaborador'=>$request-> nombre_colaborador ,
                    'comentario_colaborador'=>$request-> comentario_colaborador
                );
    
            

        if(!empty($datos)){

                      $validator = Validator::make($datos,[
                            //'id_visitante' => 'required',
                            'empresa_origen' => 'required',
                           // 'comentario_visitante'=>'required',
                            'nombre_visitante'=>'required'
                            
                        ]);
                        if($validator->fails()){
                            return response()->json($validator->errors(),400);
                        } else{ 
                                   // $recep = $request->all();


                                // verificar si la persona ya esta registrado 
                                
                                            if(!$persona){ // sino está registrado procede a registrar en la tabla personas.

                                              
                                                $persona = Persona::create([
                                                //'id' =>$request->id_visitante,
                                                'persona_nombre' =>$request->nombre_visitante,
                                                'persona_apellido' => '',
                                                'full_name_persona' => $request->nombre_visitante,
                                                'id_tipodni' => '1',
                                                'numero_dni'=>'',
                                                'email' =>'',
                                                'facebook' =>'',
                                                'nro_mobil' =>'',
                                                'nro_telefono' =>'',
                                                'id_tipopersona' =>'1',
                                                'id_estadocivil' =>'2',
                                                'id_profesion' =>'3',
                                                'id_seguro' =>'1',
                                                'genero' =>'H',
                                                'id_nacionalidad'=>'9',
                                                'foto_persona' =>'',
                                                'empresa_origen'=> $request->empresa_origen, ]);
                                                 
                                                $id_persona=$persona->id;
                                                    
                                                $clasificacion_persona = ClasificacionPersona::create([
                                                    'id_clasificacion' => '2',
                                                    'id_persona' => $id_persona,

                                                    ]);

                                                        
                                 

                                         } // fin registrar persona nueva
                                                //Registra la visita:

                                                if(!$request->id_visitante){
                                                        $id_visitante=$id_persona;
                                                    } else {
                                                        $id_visitante=$request->id_visitante;
                                                                        
                                                            }

                                                    if(!$request->sede_id){
                                                        $sede_id=1;
                                                            } else {$sede_id=$request->sede_id;}
                
                                              //  $persona=Persona::find($id_visitante);
                                                
                                                
                                                $datosfinal=array('id_visitante'=>$id_visitante,
                                                'nombre_visitante'=>$request->nombre_visitante,
                                                'empresa_origen'=>$request->empresa_origen,
                                                'comentario_visitante'=>$request->comentario_visitante,
                                                'id_colaborador'=>$request->id_colaborador,
                                                'id_motivo'=>$request->id_motivo,
                                                'colaborador'=>$request->colaborador,
                                                'id_dpto'=>$request->id_dpto,
                                                'hora_atencion'=> $now ,
                                                'motivo'=>$request->motivo ,
                                                'id_dpto'=>$request->id_dpto,
                                                'nombre_colaborador'=>$request->nombre_colaborador,
                                                'comentario_colaborador'=>$request->comentario_colaborador,
                                                'id_colaborador_atencion'=>$request->id_colaborador_atencion,
                                                'sede_id'=>$sede_id,
                                                'id_colaborador'=>$request->id_colaborador);

                                                Recep::create($datosfinal);
                                                return response()->json(['code'=>200, 'message'=>'Solicitud registrado con éxito!','data' => $datosfinal], 200);
                                                                                 
                                }
                        
                   } else {
                                                 return response()->json([
                                                'success' => false,
                                                'message' => 'Error: No fue posible realizar el registro!',
                                                'status' =>404,
                                                 'code'=>404   ]);
                                                        
                            }
    
    }
    
    /**RECEP ATENCION DE VISITAS */
    public function monitorcolaborador(){
    
                
           $datas = Departamento::orderBy('orden','ASC')->get();
          // $recepEspera=Recep::get()->where('situacion','=','EN ESPERA');
           $recepAtendidos=Recep::get()->where('situacion','=','ATENDIDO');
                
                   /* $client = new Client([
                    // Base URI is used with relative requests
                   // 'base_uri' => 'https://jsonplaceholder.typicode.com',
                       'base_uri' => 'http://localhost/recepapi/',
                        
                    // You can set any number of default request options.
                        'timeout'  => 2.0,
                    ]);*/
                      //  $client = new Client(['verify' => false]);
                     //  $recepEspera = $client->get('localhost/recepapi/');
                        
                      //  $recepEspera = Http::get('http://localhost/recepapi');
                      
                        // Create a client with a base URI
                       // $client = new Client(['base_uri' => 'http://localhost:9000/']);
                            
                    // Send a request to https://foo.com/api/test
                       // $recepEspera = $client->request('GET', 'api/');
                       // $recepEspera = $client->get('api/');
                        //  $recepEspera= response()->json($recepEspera);
                      //   $recepAtendidos= toArray($recepEspera);
                   // $recepEspera=$this->receps->all();
                       // $recepEspera=json_encode($recepEspera,true);

                       $recepEspera= $this->receps->all();
                    
                   // $recepEspera=json_decode($recepEspera->getBody()->getContents());
                                 
                return view('recep.monitorcolaborador',compact('datas','recepEspera','recepAtendidos'));
     

    }
}
