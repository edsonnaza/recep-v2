<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;

class Recep extends Model
{
    use HasFactory;
    protected $table = 'recep';
    protected $fillable =   [   'id_dpto', 'id_visitante','nombre_visitante','empresa_origen',
                                'id_motivo','motivo','situacion','comentario_visitante',
                                'fecha','id_colaborador','nombre_colaborador',
                                'comentario_colaborador','id_colaborador_atencion',
                                'hora_atencion','eliminado','sede_id'
                            ];


     public function Departamentos()
    {
        return $this->hasOne(Departamento::class,'id','id_dpto');
    }

}
