<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recep extends Model
{
    use HasFactory;
    protected $table = 'recep';
    protected $fillable =   [   'id_dpto', 'id_visitante','nombre_visitante','empresa',
                                'id_motivo','motivo','situacion','comentario_visitante',
                                'fecha','id_colaborador','nombre_colaborador',
                                'comentario_colaborador','id_colaborador_atencion',
                                'hora_atencion','eliminado','sede_id'
                            ];
}