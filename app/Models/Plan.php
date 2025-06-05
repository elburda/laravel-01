<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;


class Plan extends Model
{
    protected $table = 'planes';
    protected $primaryKey = 'plan_id';

    //White List
    protected $fillable = ['titulo', 'resumen', 'precio', 'horas','demanda_fk'];
    
    public function demanda()
    {
    return $this->belongsTo(
        Demanda::class,
        'demanda_fk',
        'demanda_id'
        );
    }

    public function precio(): Attribute
    {
    
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100,
        );
    }
}