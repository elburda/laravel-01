<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    protected $table = 'novedades';
    protected $primaryKey = 'id';

    protected $fillable = ['titulo', 'contenido', 'imagen'];
}
