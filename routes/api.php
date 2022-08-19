<?php

use Carbon\Carbon;
use App\Models\Recep;
use App\Models\Motivo;
use App\Models\ComprasFI;
use App\Models\Productos;
use App\Models\ComprasFIDET;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    //Route::resource('motivo', App\Http\Controllers\MotivoController::class);




Route::get('waiting', function (Request $request) {
    $waiting = Recep::where('eliminado','like','NO') ->Where('situacion','=','EN ESPERA')->get();
    return response()->json($waiting);
});

Route::get('attended', function (Request $request) {
    $attended = Recep::where('eliminado','like','NO')->with('Departamentos')->Where('situacion','=','ATENDIDO')->get();
    return response()->json($attended);

});

Route::get('department', function (Request $request) {
    $department =Departamento::where('activo','=','1')->orderBy('orden','ASC')->get();
    return response()->json($department);

});

Route::get('all', function (Request $request) {
    $all =Recep::where('eliminado','like','NO')->whereDate('created_at',Carbon::today())->with('Departamentos')->orderBy('created_at','DESC')->get();
    return response()->json($all);

});

   Route::get('/search',function(Request $request){
 $query=$request->search;
 $data = 'https://jobs.backbonesystems.io/api/zip-codes/01210';
 return response()->json($data);
});



});



/*

Route::get('/search',function(Request $request){
 $query=$request->search;
 $data = Productos::where('producto_nombre','like','%'.$query.'%')->get();
 return response()->json($data);
});



Route::get('/comprasfidet',function(Request $request){
 $query=$request->id_apertura;
 $data = ComprasFIDET::where('id_apertura','=',$query)->where('eliminado','=','NO')->get();
 return response()->json($data);
});


Route::get('/comprasficabdet',function(Request $request){
 //$query=$request->id_apertura;
 $data = ComprasFI::whereHas('Productos')->get();
 return response()->json($data);
});
Route::resource('comprasfi', 'TaskController', ['except' => 'show', 'create', 'edit']);*/
