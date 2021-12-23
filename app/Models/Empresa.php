<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombre
 * @property $clasificacion
 * @property $tipo_administracion
 * @property $tipo_propiedad
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property DepartamentoEmpresa[] $departamentoEmpresas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'clasificacion' => 'required',
		'tipo_administracion' => 'required',
		'tipo_propiedad' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','clasificacion','tipo_administracion','tipo_propiedad','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departamentoEmpresas()
    {
        return $this->hasMany('App\Models\DepartamentoEmpresa', 'empresa_id', 'id');
    }
    

}
