<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'trabajador_id','dia', 'hinicio','hfin'
    ];
}
