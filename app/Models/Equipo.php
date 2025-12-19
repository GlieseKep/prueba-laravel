<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $fillable =[
        'tipo',
        'marca',
        'defecto',
        'nombre_duenio',
        'telefono_duenio',
        'estado'
    ];
    static public function getEquipos()
    {
        return self::all();
    }
    static public function createEquipo(array $data)
    {
        return self::create($data);
    }
    public function updateEquipo(array $data)
    {
        return $this->update($data);
    }

}
