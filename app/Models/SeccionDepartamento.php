<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SeccionDepartamento
 *
 * @property $id
 * @property $descripcion
 * @property $departamento_empresa_id
 * @property $created_at
 * @property $updated_at
 *
 * @property DepartamentoEmpresa $departamentoEmpresa
 * @property PuestoTrabajo[] $puestoTrabajos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SeccionDepartamento extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'departamento_empresa_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','departamento_empresa_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamentoEmpresa()
    {
        return $this->hasOne('App\Models\DepartamentoEmpresa', 'id', 'departamento_empresa_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function puestoTrabajos()
    {
        return $this->hasMany('App\Models\PuestoTrabajo', 'seccion_departamento_id', 'id');
    }
    

}
