<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedore extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proveedores';

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
    protected $fillable = ['Nombre', 'Correo', 'Direccion', 'Telefono'];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
    
}
