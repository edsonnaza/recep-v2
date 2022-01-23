<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresarExamen extends Model
{
    use HasFactory;
    protected $table = 'ingresarexamen';
    protected $fillable = ['examen_nombre','descripcion'];
}
