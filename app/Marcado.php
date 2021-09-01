<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcado extends Model
{
    protected $fillable = ['trabajador_id','horaentrada','horasalida'];
}
