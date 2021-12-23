<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $genero_id
 * @property $estado_civil_id
 * @property $puesto_trabajo_id
 * @property $dui
 * @property $nit
 * @property $isss
 * @property $nup
 * @property $direccion
 * @property $departamento_id
 * @property $telefono_celular
 * @property $telefono_casa
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property EstadoCivil $estadoCivil
 * @property Genero $genero
 * @property PuestoTrabajo $puestoTrabajo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{

    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'genero_id' => 'required',
		'estado_civil_id' => 'required',
		'puesto_trabajo_id' => 'required',
		'dui' => 'required',
		'nit' => 'required',
		'isss' => 'required',
		'nup' => 'required',
		'direccion' => 'required',
		'municipio_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','genero_id','estado_civil_id','puesto_trabajo_id','dui','nit','isss','nup','direccion','municipio_id','telefono_celular','telefono_casa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'municipio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadoCivil()
    {
        return $this->hasOne('App\Models\EstadoCivile', 'id', 'estado_civil_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function puestoTrabajo()
    {
        return $this->hasOne('App\Models\PuestoTrabajo', 'id', 'puesto_trabajo_id');
    }


}
