<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalle
 *
 * @property $id
 * @property $id_producto
 * @property $precio
 * @property $cantidad
 * @property $num_facturas
 * @property $id_productos
 *
 * @property Factura $factura
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalle extends Model
{
    
    static $rules = [
		
		'precio' => 'required',
		'cantidad' => 'required',
    ];
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['precio','cantidad','num_facturas','id_productos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'num_facturas');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_productos');
    }
    

}
