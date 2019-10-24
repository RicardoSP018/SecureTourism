<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Modelo', 'Cantidad', 'Descripcion', 'Precio', 'Imagen', 'proveedor_id'];

    public function proveedores()
    {
        return $this->belongsTo('App\Proveedor');
    }
    
}
