<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Direccion
 * @property $Fecha de nacimiento
 * @property $Telefono
 * @property $Correo
 * @property $Categoria
 *
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Direccion' => 'required',
		'Fecha_de_nacimiento' =>'required',
		'Telefono' => 'required',
		'Correo' => 'required',
		'Categoria' => 'required',
    ];
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Direccion','Fecha_de_nacimiento','Telefono','Correo','Categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'id_cliente', 'id');
    }
    

}
