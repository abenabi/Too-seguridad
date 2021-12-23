<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartamentoEmpresa
 *
 * @property $id
 * @property $nombre
 * @property $numero_empleados
 * @property $empresa_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property SeccionDepartamento[] $seccionDepartamentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DepartamentoEmpresa extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'numero_empleados' => 'required',
		'empresa_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','numero_empleados','empresa_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'empresa_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seccionDepartamentos()
    {
        return $this->hasMany('App\Models\SeccionDepartamento', 'departamento_empresa_id', 'id');
    }
    

}
