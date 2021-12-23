<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PuestoTrabajo
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $salario
 * @property $seccion_departamento_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado[] $empleados
 * @property SeccionDepartamento $seccionDepartamento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PuestoTrabajo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'salario' => 'required',
		'seccion_departamento_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','salario','seccion_departamento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'puesto_trabajo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seccionDepartamento()
    {
        return $this->hasOne('App\Models\SeccionDepartamento', 'id', 'seccion_departamento_id');
    }
    

}
