<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $Precio
 * @property $Stock
 * @property $estado
 *
 * @property Detalle[] $detalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{

    static $rules = [
		'Precio' => 'required',
		'Stock' => 'required',
		'estado',
    ];
    public $timestamps = false;
    protected $perPage = 20;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

     protected $fillable = ['Precio','Stock','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalles()
    {
        return $this->hasMany('App\Models\Detalle', 'id_productos', 'id');
    }


}
