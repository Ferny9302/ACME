<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blueprint extends Model
{
    protected $table = 'blueprint';
    protected $fillable = [
        'nombre_plano',
        'documento',
        'projects_id',
        'version',
        'hoja'
    ];
}
